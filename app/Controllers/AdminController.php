<?php

namespace App\Controllers;

use Core\Request;
use Core\Controller;
use Core\Validation;
use App\Models\Option;

class AdminController extends Controller {



   public function login()
   {

      if(isset($_SESSION['Auth_Admin'])){
         $url = url('/dw-admin/dashboard');
         header('location: '.$url);
         exit();
     }

      $this->view('admin/login');

   }

     public function Admin_Login_Action()
     {


      try {

         $request  = new Request;

         $rules = [
               'user'         => ['required'],
               'password'     => ['required'],
         ];
         
         $validator  =  Validation::make($request->all(), $rules);
         
         if ($validator->fails()) {
               $errors = $validator->errors();
               return responseJson(['status' => 'errors', 'message' => $errors]);
         }


           
            if($_SERVER['HTTP_HOST'] == 'domain.test'){
               ////// Local
               $url = 'http://saas.test/api/login-action';
            }else{
               ///// Live 
               $url = 'http://saas.webartechnology.com/api/login-action';
            }
            

            // Data to be sent in the POST request
            $postData = array(
               'user'         => $request->get('user'),
               'password'     => $request->get('password'),
               'url'          =>  $request->get('url')
            );


            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

            // Execute cURL request
            $response = curl_exec($ch);

            if($response == false){
               return responseJson(['status' => 'error', 'message' => 'Api not working']);
            }

            if(json_decode($response)->status == 'error'){
               return responseJson(['status' => 'error', 'message' => 'Incorrect Credentials']);
            }elseif(json_decode($response)->status == 'errors'){
               return responseJson(['status' => 'error', 'message' => 'Incorrect Credentials']);
            }

            //fire( json_decode($response)->url);

            $_SESSION['Auth_Admin_Id'] = json_decode($response)->user_id;
            $_SESSION['Auth_Admin']    = true;

            return responseJson(['status' => 'success', 'message' => 'Login Successful', 'url'=> json_decode($response)->url ]);

      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server error please try again']);
      }
       
     }


     public function logout()
     {

       if(isset($_SESSION['Auth_Admin'])){

         $_SESSION = array();

         session_destroy();

         $url = url('/dw-admin');
      
         header("Location: ".$url); 
         exit();
       }
       
     }

  
     public function dashboard()
     {
  
        $this->view('admin/dashboard');
  
     }
  
     public function product()
     {
        $this->view('admin/product');
     }
  
     public function add_product()
     {
        $this->view('admin/add-product');
     }
  
     public function add_product_category()
     {
        $this->view('admin/add-product-category');
     }
  
     
  
     public function single_product()
     {
        $this->view('admin/single-product');
     }
  
     public function order_list()
     {
        $this->view('admin/order-list');
     }
  
     public function order_details()
     {
        $this->view('admin/order-details');
     }
  
     public function customer_list()
     {
        $this->view('admin/customer-list');
     }
  
     public function customer_details()
     {
        $this->view('admin/customer-details');
     }
  
     public function order_history()
     {
        $this->view('admin/order-history');
     }
  
     public function theme()
     {
        $dir = PUBLIC_PATH.'themes';
  
        $optionM = new Option();
  
        $data['themes']  = storeThemes($dir);
        
        $data['themeInfo'] = $optionM->getActive();
  
        // fire($data['themes']);
  
        $this->view('admin/theme', $data);
     }
  
     public function theme_details($name)
     {
  
        $dir = PUBLIC_PATH.'themes';
        $optionM = new Option();
  
        if(detaiThemes(storeThemes($dir), $name) == ''){
           header('location: '.url('/dw-admin/theme'));
           exit;
        }
  
        $file_path  = PUBLIC_PATH.'themes/'.$name.'/description.txt';
  
        if(file_exists($file_path) == false){
           header('location: '.url('/dw-admin/theme'));
           exit;  
        }
  
        $data['description'] = file_get_contents($file_path);
  
        $data['patternThemes']       = '/Theme Name:\s*(.+)/';
        $data['patternAuthor']       = '/Author:\s*(.+)/';
        $data['patternDescription']  = '/Description:\s*(.+)/';
        $data['patternVersion']      = '/Version:\s*(.+)/';
        $data['patternTags']         = '/Tags:\s*(.+)/';
        $data['patternUrl']         = '/Url:\s*(.+)/';
        $data['screenshot']          = $name.'/'.basename(storeThemes($dir)[$name]);
        $data['themeInfo'] = $optionM->getActive();
  
        $this->view('admin/theme-details', $data);
        
     }
  
     public function settings()
     {
        $this->view('admin/settings');
     }
  
     public function theme_upload()
     {
  
           $rules = [
              'theme'       => ['file'],
           ];
        
           $validator  =  Validation::make($_FILES, $rules);
     
           if ($validator->fails()) {
                 $errors = $validator->errors();
                 return responseJson(['status' => 'errors', 'message' => $errors]);
           }
  
           $request  = new Request;
  
           $request->move('theme', PUBLIC_PATH.'themes/');
  
           $success =  $request->unzipTheme(PUBLIC_PATH.'themes/'.$request->getFileName('theme'), PUBLIC_PATH.'themes/');
  
           if( $success == 'Successfull'){
              return responseJson(['status' => 'success', 'message' => 'Theme successfully install']);
           }else{
              return responseJson(['status' => 'error', 'message' => $success ]);
           }
     }
  
     
     public function active_theme()
     {
        
        $request  = new Request;
  
        $option   = new Option;
  
        $option->makeActive(trim($request->get('theme')));
  
        return responseJson(['status' => 'success', 'message' => 'Theme Active successfully']);
  
     }



}