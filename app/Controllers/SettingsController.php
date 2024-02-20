<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use App\Models\City;
use Core\Controller;
use Core\Validation;
use App\Models\State;
use App\Models\Location;
use App\Models\BillingInfo;
use App\Models\StoreDetails;

class SettingsController extends Controller {


     public function save_location()
     {
        try{
            $request = new Request;
            $rules = [
                'address'           => ['required'],
                'apartment'         => ['required'],
                'country'           => ['required'],
                'state'             => ['required'],
                'city'              => ['required'],
                'phone'             => ['required', 'numeric', 'digits:10'],
                'pincode'           => ['required', 'numeric', 'digits:6'],
            ];
            
            
            $validator  =  Validation::make($request->all(), $rules);
            
            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            $user_id = $_SESSION['Auth_Admin_Id'];
            $location = new Location;
            $existing_location = $location->chekHasdefault($user_id);
            
            $has_default = $existing_location ? 'No' : 'Yes';
    
            $location_data = [
                'user_id'         => $_SESSION['Auth_Admin_Id'],
                'address'         => $request->get('address'),
                'apartment'       => $request->get('apartment'),
                'country'         => $request->get('country'),
                'state_id'        => $request->get('state'),
                'city_id'         => $request->get('city'),
                'phone'           => $request->get('phone'),
                'pincode'         => $request->get('pincode'),
                'has_default'     => $has_default,
            ];
    
            $save_location = new Location;
            $new_location =  $save_location->inserUserLocation($location_data);
            return responseJson(['status' => 'success', 'message' => 'Location Added Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => 'Location is not save']);
        }
       
     }


     public function make_defaultlocation()
     {
        $request = new Request;
        $location = new Location;
        // fire($request->get('id'));
        $location->updateLocation($request->get('id'),$_SESSION['Auth_Admin_Id']);
        return responseJson(['status' => 'success', 'message' => 'Updated Successfully']);
     }

     public function delete_location()
     {
        $request = new Request;
        $location = new Location;
        $location->deleteLocation($request->get('id'),$_SESSION['Auth_Admin_Id']);
        return responseJson(['status' => 'success', 'message' => 'Deleted Successfully']);
     }

     public function location_data()
     {
         $locations = new Location;
         $data['location'] = $locations->getLocationData($_SESSION['Auth_Admin_Id']);
         $data = $this->view('admin/location',  $data)->render();
         return $data;
     }

     public function getStates()
     {
        $request = new Request;
        $countryId = $request->get('country_id');
        $state = new State;
        $states = $state->getStatesByCountryId($countryId);
        return responseJson($states);
     }

     public function getCities()
     {
        $request = new Request;
        $stateId = $request->get('state_id');
        $city = new City;
        $cities = $city->getCitiesByStateId($stateId);
        return responseJson($cities);
     }


     public function save_store()
     {

        try{
            $request = new Request;
            $store_data = [
                'user_id'            => $_SESSION['Auth_Admin_Id'],
                'store_name'         => $request->get('store_name'),
                'phone'              => $request->get('store_phone'),
                'contact_email'      => $request->get('contact_email'),
                'sender_email'       => $request->get('sender_email'),
                'time_zone'          => $request->get('store_timezone'),
                'unit_system'        => $request->get('store_unitsystem'),
                'default_unit'       => $request->get('store_weight'),
                'currency_id'        => $request->get('store_currency'),
                'order_prefix'       => $request->get('store_prefix'),
                'order_suffix'       => $request->get('store_suffix'),
            ];
    
            $save_store = new StoreDetails;
            $new_store =  $save_store->insertStoreData($store_data);
            if($new_store){
                $billing_data = [
                    'user_id'            => $_SESSION['Auth_Admin_Id'],
                    'store_id'           => $new_store->id,
                    'business_name'      => $request->get('business_name'),
                    'address'            => $request->get('store_address'),
                    'apartment'          => $request->get('store_apartment'),
                    'country_id'         => $request->get('store_country'),
                    'state_id'           => $request->get('store_state'),
                    'city_id'            => $request->get('store_city'),
                    'pincode'            => $request->get('store_pincode'),
                ];
    
                $save_billing = new BillingInfo;
                $new_billing =  $save_billing->insertBillingData($billing_data);
            }
            return responseJson(['status' => 'success', 'message' => 'Store Details Added Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => $th]);
        }
       
     }

}