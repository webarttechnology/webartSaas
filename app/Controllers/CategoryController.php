<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use Core\Controller;
use Core\Validation;
use App\Models\Category;


class CategoryController extends Controller {


     public function save_category()
     {
        try{

            
            $request = new Request;
            $rules = [
                'category'           => ['required'],
                // 'cat_image'              => ['required'],
            ];
            // fire($request->all());
            
            $validator  =  Validation::make($request->all(), $rules);
            
            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            $user_id = $_SESSION['Auth_Admin_Id'];
            $imageFile = $request->getFile('cat_image');
            if ($imageFile) {
                // Define the directory where you want to save the uploaded file
                $uploadPath = PUBLIC_PATH .'category/';
            
                // Generate a unique filename for the uploaded file
                $filename = uniqid() . '_' . $request->getFileName('cat_image');
  
                $request->move('cat_image',$uploadPath, $filename);
                $baseUrl = url('/');
                $imageUrl = $baseUrl . 'category/' . $filename;
            }
           
            $category_data = [
                'name'            => $request->get('category'),
                // 'slug'            => $request->get('country'),
                'parent_id'       => null,
                'image'           => $imageUrl,
            ];

            // fire( $category_data );
    
            $save_category = new Category;
            $new_category =  $save_category->insertCategory($category_data);
            // if($request->get('sub_category')){
            //     $subcategory_data = [
            //         'name'            => $request->get('sub_category'),
            //         'parent_id'       =>  $new_category->id,
            //     ];
            //     $save_category = new Category;
            //     $new_subcat =  $save_category->insertCategory($subcategory_data);
            // }
            return responseJson(['status' => 'success', 'message' => 'Category Added Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => $th]);
        }
       
     }

     public function getCategory()
     {
        $request = new Request;
        $id = intval($request->get('id'));
        $category = new Category;
        $subcategory = $category->getSubCategory($id);
        return responseJson(['status' => 'success', 'data' => $subcategory]);
     }
   


    

}