<?php

namespace App\Controllers;

use Core\Request;
use App\Models\User;
use Core\Controller;
use Core\Validation;
use App\Models\Coupon;
use App\Models\Option;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Currency;


class AdminController extends Controller
{


   public function login()
   {

      if (isset($_SESSION['Auth_Admin'])) {
         $url = url('/dw-admin/dashboard');
         header('location: ' . $url);
         exit();
      }

      $this->view('admin/login');
   }

   public function reset_password()
   {
      $this->view('admin/reset-password');
   }

   public function new_password()
   {
      $this->view('admin/new-password');
   }
   public function sign_up()
   {
      $this->view('admin/sign-up');
   }

   public function coming_soon()
   {
      $this->view('admin/coming-soon');
   }





   public function Admin_Login_Action()
   {


      try {

         $request  = new Request;

         // fire($request->all());

         $rules = [
            'user'         => ['required'],
            'password'     => ['required'],
         ];

         $validator  =  Validation::make($request->all(), $rules);

         if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => $errors]);
         }



         if ($_SERVER['HTTP_HOST'] == 'domain.test') {
            ////// Local
            $url = 'http://newtrixcart.test/api/login-action';
         } else {
            ///// Live 
            $url = 'https://prototype.trixcart.com/api/login-action';
         }


         // Data to be sent in the POST request
         $postData = array(
            'user'         => $request->get('user'),
            'password'     => $request->get('password'),
            'url'          => $request->get('url')
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

         if ($response == false) {
            return responseJson(['status' => 'error', 'message' => 'Api not working']);
         }

         if (json_decode($response)->status == 'error') {
            return responseJson(['status' => 'error', 'message' => 'Incorrect Credentials']);
         } elseif (json_decode($response)->status == 'errors') {
            return responseJson(['status' => 'error', 'message' => 'Incorrect Credentials']);
         }

         $url  = json_decode($response)->url;

         if($url == null){
            return responseJson(['status' => 'error', 'message' => 'Api not working']);
         }

         $_SESSION['Auth_Admin_Id'] = json_decode($response)->user_id;
         $_SESSION['Auth_Admin']    = true;

         return responseJson(['status' => 'success', 'message' => 'Login Successful', 'url' =>  $url]);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server error please try again']);
      }
   }


   public function logout()
   {

      if (isset($_SESSION['Auth_Admin'])) {

         $_SESSION = array();

         session_destroy();

         $url = url('/dw-admin');

         header("Location: " . $url);

         exit();
      }
   }


   public function dashboard()
   {
      $title = 'Dashboard';

      $this->view('admin/dashboard', [], $title);
   }

   public function product()
   {
      $product = new Product;
      $data['product'] = $product->getProductAll();
      $data['vendorproduct'] = $product->getVendorProductAll();
      $title = 'Product';
      $this->view('admin/products',  $data, $title);
   }

   public function add_product()
   {

      $category = new Category;


      $data['categories'] = $category->getCategory();

      $title = 'Add Product';
      
      $this->view('admin/add-product',  $data, $title);
      
   }


   

   public function edit_product($id)
   {
      $title = 'Edit Product';
      $product  = new Product;
      $category = new Category;

      $data['product']  = $product->getProduct($id);

      if($data['product'] == null){
         $url = url('/dw-admin/product');
         header('location: ' . $url);
         exit();
      }

      foreach ($product->getProductCategory($id) as $value) {
         $categoryData = $category->getparentCategory($value->category_id);
         $words = explode(", ", $categoryData);
         $reversed_words[] = [
            'id'              => $value->id,
            'category_id'     => $value->category_id,
            'reversed_words'  => array_reverse($words)
        ];
      }

      $data['category']          =  $reversed_words;
      $data['productMedia']      = $product->getProductMedia($id);
      $data['productVeriation']  = $product->getProductVeriation($id);

      //fire($data['productVeriation']);

      $this->view('admin/edit-product', $data, $title);
   }


   public function categories()
   {
      $category = new Category;
      $data['allcategory'] = $category->getAllCategory();
      // fire( $data['category']);
      $title = 'All Category';
      $this->view('admin/categories', $data);
   }




   public function add_category()
   {
      $category = new Category;
      $data['categories'] = $category->getCategory();
      $title = 'Add Category';
      $this->view('admin/add-category', $data);
   }

   public function edit_category($id)
   {
      $category = new Category;
      $data['categories'] = $category->getCategoryAll();
      $data['category']   = $category->getCategoryById($id);
      $title = 'Edit Category';
      // fire($data['category']);
      $this->view('admin/edit-category', $data);
   }

   
   public function add_variation()
   {
      $category = new Category;
      $data['categories'] = $category->getCategory();
      $title = 'Add Variation';
      $this->view('admin/add-variation', $data);
   }

   public function single_product()
   {
      $title = 'Product Details';
      $this->view('admin/single-product',  [], $title);
   }

   public function order_list()
   {
      $title = 'Order List';
      $this->view('admin/order-list',  [], $title);
   }

   public function order_details()
   {
      $title = 'Order Details';
      $this->view('admin/order-details',  [], $title);
   }

   public function add_order()
   {
      $title = 'Add Order';
      $this->view('admin/add-order',  [], $title);
   }

   public function edit_order()
   {
      $title = 'Edit Order';
      $this->view('admin/edit-order',  [], $title);
   }

   public function invoice()
   {
      $title = 'Edit Order';
      $this->view('admin/invoice',  [], $title);
   }

   public function create_invoice()
   {
      $title = 'Edit Order';
      $this->view('admin/create-invoice',  [], $title);
   }

   public function getting_started()
   {
      $title = 'Getting started';
      $this->view('admin/getting-started',  [], $title);
   }

   public function customer_list()
   {
      $title = 'Customer List';
      $user = new User;
      $data['alluser'] = $user->getAllData();
      // fire($data['alluser']);
      $this->view('admin/customer-list', $data, $title);
   }

   public function customer_details()
   {
      $title = 'Customer History';
      $this->view('admin/customer-details',  [], $title);
   }

   public function order_history()
   {
      $title = 'Order History';
      $this->view('admin/order-history',  [], $title);
   }

   public function theme()
   {
      $dir = PUBLIC_PATH . 'themes';

      $optionM = new Option();

      $data['themes']  = storeThemes($dir);

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Themes';

      $this->view('admin/theme', $data, $title);
   }

   public function theme_store()
   {
      $dir = PUBLIC_PATH . 'themes';

      $optionM = new Option();

      $data['themes']  = storeThemes($dir);

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Add Themes';

      $this->view('admin/theme-store', $data, $title);
   }


   public function theme_details($name)
   {

      $dir = PUBLIC_PATH . 'themes';
      $optionM = new Option();

      if (detaiThemes(storeThemes($dir), $name) == '') {
         header('location: ' . url('/dw-admin/theme'));
         exit;
      }

      $file_path  = PUBLIC_PATH . 'themes/' . $name . '/description.txt';

      if (file_exists($file_path) == false) {
         header('location: ' . url('/dw-admin/theme'));
         exit;
      }

      $data['description'] = file_get_contents($file_path);

      $data['patternThemes']       = '/Theme Name:\s*(.+)/';
      $data['patternAuthor']       = '/Author:\s*(.+)/';
      $data['patternDescription']  = '/Description:\s*(.+)/';
      $data['patternVersion']      = '/Version:\s*(.+)/';
      $data['patternTags']         = '/Tags:\s*(.+)/';
      $data['patternUrl']          = '/Url:\s*(.+)/';
      $data['screenshot']          = $name . '/' . basename(storeThemes($dir)[$name]);
      $data['themeInfo'] = $optionM->getActive();

      $title = 'Theme Details';

      $this->view('admin/theme-details', $data,  $title);
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

      $request->move('theme', PUBLIC_PATH . 'themes/');

      $success =  $request->unzipTheme(PUBLIC_PATH . 'themes/' . $request->getFileName('theme'), PUBLIC_PATH . 'themes/');

      if ($success == 'Successfull') {
         return responseJson(['status' => 'success', 'message' => 'Theme successfully install']);
      } else {
         return responseJson(['status' => 'error', 'message' => $success]);
      }

   }


   public function active_theme()
   {

      $request  = new Request;

      $option   = new Option;

      $option->makeActive(trim($request->get('theme')));

      return responseJson(['status' => 'success', 'message' => 'Theme Active successfully']);

   }


   public function settings()
   {
   
      $country = new Country;
      $currency = new Currency;
      $options = new Option;
      $data['countryType'] = $country->getCountryType();
      $data['currency'] = $currency->getCurrency();
      // fire(getOptions("meta_title"));
      $title = 'Setting';

      // fire(json_decode(getOptions("shipping_method"))[0]->shipping_name);
      $this->view('admin/settings', $data, $title);
   }

   public function vendor()
   {

      $data['cjVendorCategory'] = json_decode(cjCurl('category'))->data;

      // fire($data['cjVendorCategory'] );

      $this->view('admin/vendor', $data);
   }

   public function vendor_store_list()
   {
     
      $this->view('admin/vendor-store-list');
   }
   
   public function vendor_store($id)
   {

      $data['cjVendorProduct'] = json_decode(cjCurl('product-list', $id))->data;
      $data['cjVendorCategory'] = json_decode(cjCurl('category'))->data;
      $data['id'] = $id;
      
      // fire($data['cjVendorProduct']);
      $this->view('admin/vendor-store', $data);

   }

   public function vendor_product_details($id)
   {
      $category = new Category;
      $product = new Product;
      $data['product'] = $product->getProductAll();
      $data['product_id'] = $product->getProductByVendorId($id);
      $data['cjVendorProduct'] = json_decode(cjCurl('product-details', $id))->data;
      $data['id'] = $id;
      $data['categories'] = $category->getCategory();
      $data['vendor_variants'] = $product->getVendorVariant($id);

      // foreach ($product->getProductCategory( $data['product_id']->id) as $value) {
      //    $categoryData = $category->getparentCategory($value->category_id);
      //    $words = explode(", ", $categoryData);
      //    $reversed_words[] = [
      //       'id'              => $value->id,
      //       'category_id'     => $value->category_id,
      //       'reversed_words'  => array_reverse($words)
      //   ];
      // }
      // $data['category']          =  $reversed_words;
      // fire( $data['category']);
    
      // fire($data['cjVendorProduct']);
      $this->view('admin/vendor-product-details', $data);
   }
   
   
   public function forgotPassword()
   {
      $this->view('admin/reset-password');
   }

   public function sendResetLinkEmail()
   {
      try {

         $request = new Request;

         $rules = [
            'email' => ['required'],
         ];


         $validator = Validation::make($request->all(), $rules);

         if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => $errors]);
         }


         if ($_SERVER['HTTP_HOST'] == 'domain.test') {
            ////// Local
            $url = 'http://newtrixcart.test/api/password/email';
         } else {
            ///// Live
            $url = 'https://prototype.trixcart.com/api/password/email';
         }

         // Data to be sent in the POST request
         $postData = array(
            'email' => $request->get('email'),
            'url'   => $request->get('url'),
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
         // fire($response);


         if ($response == false) {
            return responseJson(['status' => 'error', 'message' => 'Api not working']);
         }

         if (json_decode($response)->status == 'error') {
            return responseJson(['status' => 'error', 'message' => 'Email address is not exist']);
         }


         return responseJson(['status' => 'success', 'message' => 'Link sent is Successfull to your email', 'url' => "/dw-admin"]);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server error please try again']);
      }
   }

   public function showResetForm($token, $id)
   {

      if ($_SERVER['HTTP_HOST'] == 'domain.test') {
         ////// Local
         $url = 'http://newtrixcart.test/api/valid-user';
      } else {
         ///// Live
         $url = 'https://prototype.trixcart.com/api/valid-user';
      }

      // Data to be sent in the POST request
      $postData = array(
         'token' => $token,
         'id'    => $id,
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

      // fire( json_decode($response)->data );

      if (json_decode($response)->data == false) {
         $url = url('/dw-admin');
         header('location: ' . $url);
         exit();
      }

      $data['data'] = [
         'email' => json_decode($response)->data->email,
      ];


      $this->view('admin/new-password', $data);
   }

   public function resetPassword()
   {

      try {

         $request = new Request;

         $rules = [
            'password'           => ['required'],
            'confirm-password'   => ['required'],
         ];

         $validator = Validation::make($request->all(), $rules);

         if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => $errors]);
         }


         if ($_SERVER['HTTP_HOST'] == 'domain.test') {
            ////// Local
            $url = 'http://newtrixcart.test/api/password/reset';
         } else {
            ///// Live
            $url = 'https://prototype.trixcart.com/api/password/reset';
         }


         // Data to be sent in the POST request
         $postData = array(
            'password' => $request->get('password'),
            'confirm-password' => $request->get('confirm-password'),
            'email' => $request->get('email'),
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

         if ($response == false) {
            return responseJson(['status' => 'error', 'message' => 'Api not working']);
         }

         if (json_decode($response)->status == 'error') {
            return responseJson(['status' => 'error', 'message' => 'Server error please try again']);
         }

         return responseJson(['status' => 'success', 'message' => 'Password Reset Successfully', 'url' => "/dw-admin"]);
      
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server error please try again']);

      }
   }

 
}
