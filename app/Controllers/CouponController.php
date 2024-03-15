<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use Core\Controller;
use Core\Validation;
use App\Models\Coupon;


class CouponController extends Controller
{

    public function coupon(){
        $coupon = new Coupon;
        $data['coupon'] = $coupon->getCoupon();
        $this->view('admin/coupon-list', $data);
     }
     public function addCoupon(){
        $coupon = new Coupon;
        $data['coupon'] = $coupon->getCoupon();
        $this->view('admin/add-coupon', $data);
     }
  
     public function edit_coupon($id)
     {
        $coupon = new Coupon;
        $data['coupon'] = $coupon->getCouponById($id);
        $title = 'Edit Coupon';
        $this->view('admin/edit-coupon', $data);
     }


    public function save_coupon()
    {
        try {
            $request = new Request;
            $rules = [
                'name'              => ['required'],
                'amount'            => ['required'],
                'start'             => ['required'],
                'expired'           => ['required'],
                'type'              => ['required'],
                'status'            => ['required'],
                'minimum_amount'    => ['required'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            if( $request->get('type') == 'Percentage'){



                $validator = Validation::make($request->all(), ['maximum_discount_amount'    => 'required']);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }
    

                $maximum_discount = $request->get('maximum_discount_amount');

            }else{
                $maximum_discount = null;
            }

            $coupon_data = [
                'coupon_name'              => $request->get('name'),
                'amount'                   => $request->get('amount'),
                'start_date'               => $request->get('start'),
                'end_date'                 => $request->get('expired'),
                'minimum_amount'           => $request->get('minimum_amount'),
                'maximum_discount_amount'  => $maximum_discount,
                'type'                     => $request->get('type'),
                'status'                   => $request->get('status'),
            ];

            $save_coupon = new Coupon;
            if($request->get('types') == "update"){
                $update_coupon =  $save_coupon->updateCoupon($request->get('coupon_id'),$coupon_data);
                $msg = "Coupon Update Successfully";
            }else{
                $new_coupon =  $save_coupon->insertCoupon($coupon_data);
                $msg = "Coupon Added Successfully";

            }
            return responseJson(['status' => 'success', 'message' => $msg]);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => 'Coupon is not save']);
        }
    }
    

    public function delete_coupon()
    {
        $request = new Request;
        $coupon = new Coupon;
        $coupon->deleteCoupon($request->get('id'));
        return responseJson(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
