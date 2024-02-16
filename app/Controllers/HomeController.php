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

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'index', $data);
   }
   
   public function about()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'about', $data);
   }
   public function contact_us()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'contact-us', $data);
   }
   public function checkout()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'checkout', $data);
   }
   public function faq()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'faq', $data);
   }
   public function cart()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'cart', $data);
   }
   public function gallery()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'gallery', $data);
   }
   public function register()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'login-resgister', $data);
   }
   public function my_account()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'my-account', $data);
   }
   public function shop_detail()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'shop-detail', $data);
   }
   public function shop()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'shop', $data);
   }
   public function terms()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'terms-condition', $data);
   }
   public function track_order()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'track-order', $data);
   }
   public function wishlist()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'wishlist', $data);
   }

   public function blog()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'blog', $data);
   }

   
   public function blog_single()
   {

      $optionM = new Option();

      $data['themeInfo'] = $optionM->getActive();

      $this->view('themes/'. trim( $data['themeInfo']->value) . '/' . 'blog-single', $data);
   }
   



   






 


   
}
