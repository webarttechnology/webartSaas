<?php

namespace App\Controllers;

use App\Models\Option;
use Core\Request;
use Core\Controller;
use Core\Validation;

class HomeController extends Controller
{


   public function index()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = option('business_name');

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'index', $data, $title);
   }
   
   public function about()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'About';

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'about', $data, $title);
   }
   public function contact_us()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Contact Us';

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'contact-us', $data);
   }
   public function checkout()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Checkout';

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'checkout', $data, $title);
   }
   public function faq()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'FAQ';

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'faq', $data, $title);
   }
   public function cart()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $title = 'Cart';

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'cart', $data, $title);
   }
   public function gallery()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Gallery';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'gallery', $data, $title);
   }
   public function register()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Register';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'login-resgister', $data, $title);
   }
   public function my_account()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'My Account';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'my-account', $data, $title);
   }
   public function shop_detail()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Shop Details';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'shop-detail', $data, $title);
   }
   public function shop()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Shop';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'shop', $data, $title);
   }
   public function terms()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'About';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'terms-condition', $data, $title);
   }
   public function track_order()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Track Order';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'track-order', $data, $title);
   }
   public function wishlist()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Wishlist';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'wishlist', $data, $title);
   }

   public function blog()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Blog';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'blog', $data, $title);
   }

   
   public function blog_single()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();
      $title = 'Blog Single';
      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'blog-single', $data, $title);
   }
   



   






 


   
}
