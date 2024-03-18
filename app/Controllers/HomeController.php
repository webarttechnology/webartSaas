<?php

namespace App\Controllers;

use Core\Mail;
use Core\Request;
use App\Models\Cart;
use App\Models\User;
use Core\Controller;
use Core\Validation;
use App\Models\Coupon;
use App\Models\Option;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{


   public function index()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = option('business_name');
      $category = new Category;
      $data['allcategory'] = $category->getRandomCategory();

      $product = new Product;
      $data['product'] = $product->getCategoryProductAll();

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'index', $data, $title);
   }

   public function about()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'About';

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'about', $data, $title);
   }
   public function contact_us()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Contact Us';

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'contact-us', $data);
   }
   public function checkout()
   {

      if(!isset($_SESSION['user_id'])){
         $url = url('/');
         header('location: '.$url);
         exit();
      }

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Checkout';

      $cart = new Cart;
      $data['cart'] = $cart->getCart();

      $country   = new Country;
      $data['country'] = $country->getCountryType();

      // fire($data['country']);

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'checkout', $data, $title);
   }
   public function faq()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'FAQ';

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'faq', $data, $title);
   }
   public function cart()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Cart';
      $cart = new Cart;
      $data['cart'] = $cart->getCart();

      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'cart', $data, $title);
   }


   public function getCart()
   {

      try {
         $cart   = new Cart;

         $allCart = $cart->getCart();

         if (count($allCart) > 0) {
            return responseJson(['status' => 'success', 'data' => $allCart]);
         }
         return responseJson(['status' => 'error', 'message' => 'No Record Found']);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => $th]);
      }
   }

   public function getCoupon()
   {

      try {
         $request = new Request;

         $rules = [
            'coupon_code'           => ['required'],
        ];


        $validator  =  Validation::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => "please enter coupon code"]);
        }
         $cart   = new Cart;
         $allCart = $cart->getCart();
         $coupon   = new Coupon;
         $coupons = $coupon->getCouponByName($request->get('coupon_code'));
         if ($coupons) {
            if($allCart['grandTotal'] >= $coupons->minimum_amount){
               if($coupons->type =="Percentage"){
                  $totalprice = $allCart['grandTotal'] * $coupons->amount / 100;
                  if($coupons->maximum_discount_amount <= $totalprice){
                        $discount = $coupons->maximum_discount_amount;
                  }else{
                        $discount = $totalprice;
                  }
               }else{
                  $discount = $coupons->amount;
               }
               $data =[
                  'id'           => $coupons->id,
                  'code'         => $coupons->coupon_name,
                  'discount'     => $discount,
                  'grand_total'     => $allCart['grandTotal'] - $discount,
               ];
               return responseJson(['status' => 'success','message'=>'Coupon is Applied', 'data' => $data]);
            }else{
               return responseJson(['status' => 'error', 'message' =>'Minimium $' .$coupons->minimum_amount . ' is required']);
            }
         }
         return responseJson(['status' => 'error', 'message' => 'Coupon does not exist']);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => $th]);
      }
   }


   public function cartData()
   {
       $optionM = new Option();
       $data['themeInfo'] = $optionM->getActive();
       $title = 'Cart';
       $carts = new Cart;
       $data['cart'] = $carts->getCart();
       $data = $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'getCart', $data, $title)->render();
       return responseJson(['status' => 'success', 'data' => $data]);
   }

   public function gallery()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Gallery';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'gallery', $data, $title);
   }
   public function register()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Register';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'login-resgister', $data, $title);
   }
   public function my_account()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'My Account';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'my-account', $data, $title);
   }
   public function shop_detail($prod_name, $id)
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $product = new Product;
      $data['product'] = $product->getProductByID($id);
      $data['featured_product'] = $product->getFeaturedProduct(  $data['product']->id, $data['product']->category_id);
      $data['product_media'] = $product->getProductMediaByProdid($id);
      $data['product_color'] = $product->getProductColor($id);
      $data['product_size'] = $product->getProductSize($id);
      $title = 'Shop Details';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'shop-detail', $data, $title);
   }
   public function shop()
   {

      $optionM = new Option();

      $product = new Product;
      
      // $data['product'] = $product->getProductAll();
      $data['product'] = $product->getCategoryProductAll();
      $data['themeInfo'] = $optionM->getActive();
      $title = 'Shop';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'shop', $data, $title);
   }
   
   public function terms()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'About';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'terms-condition', $data, $title);
   }
   public function track_order()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Track Order';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'track-order', $data, $title);
   }
   public function wishlist()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Wishlist';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'wishlist', $data, $title);
   }

   public function blog()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Blog';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'blog', $data, $title);
   }


   public function blog_single()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Blog Single';
      $this->view('themes/' . trim($data['themeInfo']->value) . '/' . 'blog-single', $data, $title);
   }




   public function registerAccount()
   {

      try {

         $request = new Request;
         // fire($request->all());

         $rules = [
            'email' => ['required'],
         ];
         $validator = Validation::make($request->all(), $rules);

         if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => $errors]);
         }

         $user = new User;
         $cart = new Cart;

         $check = $user->checkUser($request->get('email'));
         if ($check == false) {
            $user_data = [
               'email' => $request->get('email'),
            ];

            $new_user = $user->create($user_data);
            $_SESSION['user_id'] = $new_user->id;
            $msg = 'Your acount succesfully created';
         } else {
            $_SESSION['user_id'] = $check['id'];
            $msg = 'Sign In Successfully';
         }

         $uuid = $_SESSION['unique_id'];
         $checkcart = $cart->checkCart($uuid);      
         if( $checkcart){
             $updatecart = $cart->addToCart( $_SESSION['user_id'] , $uuid);
         }

         unset($_SESSION['unique_id']);

         $urls = fullUrl();
         $parsed_url = parse_url($urls);
         $base_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . '/';
        
         $url = $base_url;

         return responseJson(['status' => 'success', 'message' => 'Your acount succesfully created', 'url' => $url]);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'Server error please try again']);
      }
   }





   public function sendOtp()
   {

      try {

         $request = new Request;

         $otp = rand(1000, 9999);

         $data['data'] = [
            'otp' => $otp,
            'email' => $request->get('email'),
         ];


         $otp_template = $this->view('emails/otp_send_mail', $data)->render();

         Mail::send($request->get('email'), 'Your otp for verification', $otp_template);

         return responseJson(['status' => 'success', 'message' => 'OTP sent is Successfull to your email' . $otp, 'otp' => base64_encode($otp)]);
      } catch (\Throwable $th) {
         return responseJson(['status' => 'error', 'message' => 'OTP sent is fail to your email']);
      }
   }

   public function logout()
   {

      if (isset($_SESSION['user_id'])) {

         $_SESSION = array();

         session_destroy();

         $url = url('/');

         header("Location: " . $url);
         exit();
      }
   }
}
