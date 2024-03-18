<?php

use App\Models\Cart;
use Core\Database;
use App\Models\Option;



/**
 * The "fire" function in PHP is used to display the value and type of a variable in a formatted manner
 * and then terminate the script execution.
 * 
 * @param variable The variable parameter is the variable that you want to debug and display its value.
 */
function fire()
{
    echo '<pre>';
    $numParams = func_num_args();
    for ($i = 0; $i < $numParams; $i++) {
        $param = func_get_arg($i);
        var_dump($param);
    }
    echo '</pre>';
    die(); // or exit();
}

/**
 * The function "env" checks if a given string exists as a key in the  superglobal array and
 * returns its corresponding value if it does, otherwise it returns false.
 * 
 * @param string The parameter "string" is a string that represents the key of the environment variable
 * that you want to retrieve.
 * 
 * @return the value of the environment variable with the given string as the key. If the environment
 * variable is set, it will return the value of the variable. If the environment variable is not set,
 * it will return false.
 */
function env($string)
{
    return isset($_ENV[$string]) ? $_ENV[$string] : false;
}


/**
 * The function `url()` returns the base URL of the current website concatenated with the provided
 * path.
 * 
 * @param path The `path` parameter is a string that represents the path or route that you want to
 * append to the base URL. It is optional and has a default value of an empty string.
 * 
 * @return the base URL concatenated with the provided path, after trimming any leading or trailing
 * slashes from the path.
 */
function url($path = '')
{
    $baseUrl = ''; // Empty by default

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $baseUrl .= "https://";
    } else {
        $baseUrl .= "http://";
    }

    $baseUrl .= $_SERVER['HTTP_HOST'];

    return $baseUrl . '/' . trim($path, '/');
}


/**
 * The function generates and returns a CSRF token if it doesn't already exist in the session.
 * 
 * @return the CSRF token stored in the ['csrf_token'] variable.
 */
function csrf_token()
{
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * The function generates a CSRF token and returns it as a hidden input field in HTML format.
 * 
 * @return an HTML input field with a hidden type. The value of the input field is the CSRF token
 * stored in the session, and the name of the input field is "csrf_token".
 */
function csrf_field()
{
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return "<input type='hidden' value='" . $_SESSION['csrf_token'] . "' name='csrf_token'>";
}


/**
 * The function responseJson is used to send a JSON response with the specified data.
 * 
 * @param data The  parameter is the data that you want to convert to JSON format and send as the
 * response. It can be an array, object, or any other data type that can be encoded as JSON.
 */
function responseJson($data)
{
    header('Content-Type: application/json');
    echo json_encode($data);
}


/**
 * The function "diff_for_humans" calculates the time difference between two dates and returns a
 * human-readable string describing the difference.
 * 
 * @param start_date The start_date parameter is the starting date for which you want to calculate the
 * difference. It should be in a format that can be parsed by the strtotime() function, such as
 * 'YYYY-MM-DD' or 'YYYY-MM-DD HH:MM:SS'.
 * @param end_date The end_date parameter is the date and time that you want to calculate the
 * difference from.
 * 
 * @return a string indicating the time difference between the start date and end date. The string will
 * be in the format "x years ago", "x months ago", "x days ago", "x hours ago", "x minutes ago", or
 * "Just now" depending on the time difference.
 */


 function diff_for_humans($start_date) {

    $start_timestamp = strtotime($start_date);
    $current_timestamp = time();

    $diff_seconds = abs($current_timestamp - $start_timestamp);

    $years = floor($diff_seconds / (365 * 24 * 60 * 60));
    $months = floor(($diff_seconds - $years * 365 * 24 * 60 * 60) / (30 * 24 * 60 * 60));
    $days = floor(($diff_seconds - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60) / (24 * 60 * 60));
    $hours = floor(($diff_seconds - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60 - $days * 24 * 60 * 60) / (60 * 60));
    $minutes = floor(($diff_seconds - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60 - $days * 24 * 60 * 60 - $hours * 60 * 60) / 60);

    if ($years > 0) {
        return $years . ' years ago';
    } elseif ($months > 0) {
        return $months . ' months ago';
    } elseif ($days > 0) {
        return $days . ' days ago';
    } elseif ($hours > 0) {
        return $hours . ' hours ago';
    } elseif ($minutes > 0) {
        return $minutes . ' minutes ago';
    } else {
        return 'Just now';
    }
}

function storeThemes($dir){

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::SELF_FIRST);
    $themes = array();

    // foreach ($iterator as $file) {
    //     if ($file->isFile() && in_array(strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION)), array("jpg", "jpeg", "png", "gif"))) {
    //         $folderName = basename(dirname($file->getPathname()));
    //         $themes[$folderName] = $file->getPathname();
    //     }
    // }

    foreach ($iterator as $file) {
        if ($file->isFile() && in_array(strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION)), array("jpg", "jpeg", "png", "gif"))) {
            $folderName = basename(dirname($file->getPathname()));
            // Check if a screenshot exists for the theme
            if (strpos($file->getPathname(), $folderName . DIRECTORY_SEPARATOR . 'screenshot') !== false) {
                $themes[$folderName] = $file->getPathname();
            }
        }
    }

    return $themes;
}


function detaiThemes($themes, $name){

    $theme = '';
    foreach ($themes as $key => $value) {
        if ($key === $name) {
            $theme = $key;
            break; // Stop looping once the key is found
        }
    }

    return $theme;
}


function option($key){
    $db = Database::connect();
    $query = $db->prepare("SELECT * FROM `options` WHERE `name` = :key");
    $query->bindValue(':key', $key);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ)->value ?? null;
}

function fullUrl(){
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $requestUri = $_SERVER['REQUEST_URI'];
    
    $fullUrl = $protocol . "://" . $host . $requestUri;
    
    return $fullUrl;
}
    
    
function urisegments(){
    $url = fullUrl();
    // Parse the URL to get the path
    $path = parse_url($url, PHP_URL_PATH);
    // Explode the path to get individual segments
    $segments = explode('/', $path);
    return $segments;
}


function getOptions($key)
{
    $options = new Option;
    $data = $options->getKeyValue($key);
    return $data->value;
}


function cjCurl($type, $id = null){

    if($type  == 'category'){
        $url = 'https://developers.cjdropshipping.com/api2.0/v1/product/getCategory';
    }else if($type  == 'product-list'){
        $url = 'https://developers.cjdropshipping.com/api2.0/v1/product/list?categoryId='.$id.'';
    }else if($type  == 'product-details'){
        $url = 'https://developers.cjdropshipping.com/api2.0/v1/product/query?pid='.$id.'';
    }else if($type  == 'product-reviews'){
        $url = 'https://developers.cjdropshipping.com/api2.0/v1/product/comments?pid='.$id.'';
    }

    // $accessToken = 'eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIxNTIzNCIsInR5cGUiOiJBQ0NFU1NfVE9LRU4iLCJzdWIiOiJicUxvYnFRMGxtTm55UXB4UFdMWnlnWjlSSUE2VHpzZUV0R1cxbW9KcXFwb3IxZlkxbytIcSttV0hhUFM0Nk9mWmRBR0c0YS9MWDBzSnBrcDVWTVp6YXo5YUU1RGpjVkRYd1pNY0cyN2wxWlBXZlV4bklpR1RXSmIxUEhwVEEyMGlRQlJUb2VuZnNMbkFpNWFIMENlSjNzU1dTc3RqTG1rUzlYZU1nOUhWZTd1VzZML3U4ZXF5WjJnM2lqSk1JdVV4dWVzK2ZVUS9wejhZYzhUNWhrMkpnY3VXOW5NbnZLMCtPYnExa1E4QTNLbzNOVWF3VGRaVlc3QlZjdXZrM1dRNXZnejRBbHNaR0NvVmZKUmk5dXhneTkraE5HYlVMSmVkWmxlaWZURTNvRXliN2ZwT1FWNG9uOXRCYTR2Q0I4SCJ9.1Xn8ACO3ZJREbZRRFDlC2q_FmgM4GgrAVLCOarIN-w0';
    $accessToken = 'eyJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIxNTIzNCIsInR5cGUiOiJBQ0NFU1NfVE9LRU4iLCJzdWIiOiJicUxvYnFRMGxtTm55UXB4UFdMWnlnWjlSSUE2VHpzZUV0R1cxbW9KcXFwb3IxZlkxbytIcSttV0hhUFM0Nk9mWmRBR0c0YS9MWDBzSnBrcDVWTVp6WHBtVlFtQkg5a01FTE01VkkvQ0pSMVZQUFJLZ2RKcmFvMWZWWERtdm41R2lRQlJUb2VuZnNMbkFpNWFIMENlSjNzU1dTc3RqTG1rUzlYZU1nOUhWZTd1VzZML3U4ZXF5WjJnM2lqSk1JdVV4dWVzK2ZVUS9wejhZYzhUNWhrMkpnY3VXOW5NbnZLMCtPYnExa1E4QTNLbzNOVWF3VGRaVlc3QlZjdXZrM1dRNXZnejRBbHNaR0NvVmZKUmk5dXhneTkraE5HYlVMSmVkWmxlaWZURTNvRXliN2ZwT1FWNG9uOXRCYTR2Q0I4SCJ9.FDeFxTMVXuvefbKE0id9de96stg_N-zh34LTDqoP4qk';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'CJ-Access-Token: ' . $accessToken
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        fire(curl_error($ch));
    } 

    curl_close($ch);
    
    return $response;
}


function CartCount()
{
  
    $cart =  new Cart;

    $result = $cart->getCart();

    return $result['cartCount'];

}