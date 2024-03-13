<?php

namespace App\Controllers;

use App\Models\State;
use Core\Request;
use Core\Controller;


class CheckoutController extends Controller
{


      public function get_country(){


        try {

            $request = new Request;

            $state  = new State;
            $data = $state->getStatesByCountryId($request->get('id'));

            if(count($data) > 0){
                return responseJson(['status' => 'success', 'data' => $data]);
            }else{
                return responseJson(['status' => 'error', 'message' => 'No record found']); 
            }

        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => 'Server Error Please Try Again']); 
        }
      }
  
   
}
