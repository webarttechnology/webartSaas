<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use App\Models\Cart;
use Core\Controller;
use Core\Validation;
use App\Models\Category;


class CartController extends Controller
{

    public function manageCart()
    {
        try {
            $request = new Request;
            // fire($request->all());
            if($request->get('type') =="remove"){
                $rules = [
                    'productId'           => ['required'],
                ];
    
            }else{
                $rules = [
                    'productId'           => ['required'],
                    'quantity'           =>  ['required'],
                ];
    
            }
          

            $validator  =  Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }
            
            // session_start();
            if(!isset($_SESSION['user_id'])){
                if (!isset($_SESSION['unique_id'])) {
                    $_SESSION['unique_id'] = uniqid();
                }
            }
            
            $uuid = $_SESSION['unique_id'];
            // fire($uuid);
            $cart = new Cart;
            $cart_data = [
                'user_id'         => $_SESSION['user_id'] ?? null,
                'uuid'            => $_SESSION['user_id'] ? null : $uuid,
                'prod_id'         => $request->get('productId'),
                'quantity'        => $request->get('quantity'),
            ];
            if($request->get('type') =="add"){
               
                $checkcart = $cart->checkProdinCart($request->get('productId'));  
                // fire($checkcart);
                if(!$checkcart){
                    $save_cart =  $cart->insertCart($cart_data);
                    $msg = "Product added to cart successfully.";
                }else{
                   $msg = "Product is already added in cart.";
                }
            }else if($request->get('type') =="update"){
                $update_cart =  $cart->updateCart($request->get('productId'),$request->get('quantity'));
                $msg = "Product updated to cart successfully.";
            }else if($request->get('type') =="remove"){
                // $user_id_or_uuid = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : $uuid;
                $delete_cart =  $cart->deleteCart($request->get('productId'));
                $msg = "Product deleted to cart successfully.";
            }
            
            return responseJson(['status' => 'success', 'message' =>  $msg ]);
            
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => 'Product was not added to the cart.']);
        }
    }
   
}
