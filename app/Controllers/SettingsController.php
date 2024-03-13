<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use App\Models\City;
use Core\Controller;
use Core\Validation;
use App\Models\State;
use App\Models\Option;
use App\Models\Location;
use App\Models\BillingInfo;
use App\Models\StoreDetails;

class SettingsController extends Controller
{


    public function save_location()
    {
        try {
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
        $location->updateLocation($request->get('id'), $_SESSION['Auth_Admin_Id']);
        return responseJson(['status' => 'success', 'message' => 'Updated Successfully']);
    }

    public function delete_location()
    {
        $request = new Request;
        $location = new Location;
        $location->deleteLocation($request->get('id'), $_SESSION['Auth_Admin_Id']);
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

        try {
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
            if ($new_store) {
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

    public function save_settings()
    {
        try {
            $request = new Request;
            
            // fire($request->all());

            if ($request->get('type') == "general") {

                $rules = [
                    'meta_title' => ['required'],
                    'meta_description' => ['required'],
                    'meta_keywords' => ['required'],
                ];


                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $keywordsArray = json_decode($request->get('meta_keywords'), true);

                $settings = [
                    'meta_title' => $request->get('meta_title'),
                    'meta_description' => $request->get('meta_description'),
                    'meta_keywords' => implode(', ', array_column($keywordsArray, 'value')),
                ];
            } else if ($request->get('type') == "store") {

                $rules = [
                    'store_name' => ['required'],
                    'store_owner' => ['required'],
                    'store_address' => ['required'],
                    'store_email' => ['required'],
                    'store_phone' => ['required'],
                ];


                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $settings = [
                    'store_name' => $request->get('store_name'),
                    'store_owner' => $request->get('store_owner'),
                    'store_address' => $request->get('store_address'),
                    'store_geocode' => $request->get('store_geocode'),
                    'store_email' => $request->get('store_email'),
                    'store_phone' => $request->get('store_phone'),
                    'store_fax' => $request->get('store_fax'),
                ];

            } else if ($request->get('type') == "localization") {

                $rules = [
                    'localization_country' => ['required'],
                    'localization_language' => ['required'],
                    'localization_currency' => ['required'],
                ];

                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }
                $settings = [
                    'localization_country' => $request->get('localization_country'),
                    'localization_language' => $request->get('localization_language'),
                    'localization_currency' => $request->get('localization_currency'),
                    'localization_length' => $request->get('localization_length'),
                    'localization_weight' => $request->get('localization_weight'),
                ];
            } else if ($request->get('type') == "products") {

                $rules = [
                    'products_items_per_page' => ['required'],
                    'products_min_voucher' => ['required'],
                    'products_max_voucher' => ['required'],
                    'products_tax_rate' => ['required'],
                ];


                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $settings = [
                    'category_product_count' => $request->get('category_product_count'),
                    'products_items_per_page' => $request->get('products_items_per_page'),
                    'allow_reviews' => $request->get('allow_reviews'),
                    'allow_guest_reviews' => $request->get('allow_guest_reviews'),
                    'products_min_voucher' => $request->get('products_min_voucher'),
                    'products_max_voucher' => $request->get('products_max_voucher'),
                    'product_tax' => $request->get('product_tax'),
                    'products_tax_rate' => $request->get('products_tax_rate'),
                ];
            } else if ($request->get('type') == "customers") {

                $rules = [
                    'customers_online' => ['required'],
                    'customers_activity' => ['required'],
                    'customers_searches' => ['required'],
                    'customers_guest_checkout' => ['required'],
                    'customers_login_prices' => ['required'],
                    'customer_login_attempts' => ['required'],
                ];

                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $settings = [
                    'customers_online' => $request->get('customers_online'),
                    'customers_activity' => $request->get('customers_activity'),
                    'customers_searches' => $request->get('customers_searches'),
                    'customers_guest_checkout' => $request->get('customers_guest_checkout'),
                    'customers_login_prices' => $request->get('customers_login_prices'),
                    'customer_login_attempts' => $request->get('customer_login_attempts'),
                ];
            } else if ($request->get('type') == "shipping") {

                $rules = [
                    'shipping_name'  => ['required'],
                    'shipping_charge' => ['required']
                ];

                $validator = Validation::make($request->get('kt_ecommerce_add_shipping_method')[0], $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $shipping  = [];

                foreach ($request->get('kt_ecommerce_add_shipping_method') as  $value) {
                     if(!empty($value['shipping_name']) && !empty($value['shipping_charge'])){
                        $shipping[]  = [
                            'shipping_name'     => $value['shipping_name'], 
                            'shipping_charge'   => $value['shipping_charge'], 
                        ];
                     }
                }
               
                $settings  = [
                    'shipping_method'   => json_encode($shipping),
                ];
    
            }

            $option = new Option;
            $new_data = $option->saveSettings($settings);
            return responseJson(['status' => 'success', 'message' => ucfirst($request->get('type')) . ' Added Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => ucfirst($request->get('type')) . ' is not save']);
        }
    }
}
