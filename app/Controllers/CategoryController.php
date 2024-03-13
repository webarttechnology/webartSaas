<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use Core\Controller;
use Core\Validation;
use App\Models\Category;


class CategoryController extends Controller
{


    public function save_category()
    {
        try {


            $request = new Request;
            $rules = [
                'category' => ['required'],
                // 'cat_image' => ['required'],
            ];

            // fire( $request->getFile('avatar'));
            // fire( $sub_category[$last_sub_category_index]);

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            $user_id = $_SESSION['Auth_Admin_Id'];
            $imageFile = $request->getFile('avatar');
            
            if ($imageFile) {
                // Define the directory where you want to save the uploaded file
                $uploadPath = PUBLIC_PATH . 'uploads/category/';

                // Generate a unique filename for the uploaded file
                $filename = uniqid() . '_' . $request->getFileName('avatar');

                $request->move('avatar', $uploadPath, $filename);
                $baseUrl = url('/');
                $imageUrl = $baseUrl . 'uploads/category/' . $filename;
                $category_data['image'] = $imageUrl;
                $subcategory_data['image'] = $imageUrl;
            }

            $category_data = [
                'name'          => $request->get('category'),
                'parent_id'     => null,
                'status'        => $request->get('status'),
                'image'         => $imageUrl,
                'description'   => $request->get('description'),
            ];

            // fire( $category_data );

            $save_category = new Category;
            if ($request->get('sub_category')) {
                $sub_category = $request->get('sub_category');
                $last_sub_category_index = null;

                for ($i = count($sub_category) - 1; $i >= 0; $i--) {
                    if ($sub_category[$i] !== "") {
                        $last_sub_category_index = $i;
                        break;
                    }
                }

                $subcategory_data = [
                    'name' => $request->get('category'),
                    'status' => $request->get('status'),
                    'parent_id' => $sub_category[$last_sub_category_index],
                    'image' => $imageUrl,
                    'description' => $request->get('description'),
                ];

                $save_category = new Category;
                $new_subcat = $save_category->insertCategory($subcategory_data);
            } else {
                $new_category = $save_category->insertCategory($category_data);
            }
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
        $data['subcategory'] = $category->getSubCategory($id);
        // $data = $this->view('admin/subcategory', $data)->render();
        // return $data;
        return responseJson(['status' => 'success', 'data' => $data]);
    }

    public function update_category()
    {
        try {
            $request = new Request;
            // fire($request->all());
            // fire( $request->getFile('avatar'));
            $rules = [
                'category' => ['required'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            $user_id = $_SESSION['Auth_Admin_Id'];
            $imageFile = $request->getFile('avatar');

            // fire( $imageFile );

            if (count(array_filter($imageFile)) > 1) {


                // Define the directory where you want to save the uploaded file
                $uploadPath = PUBLIC_PATH . 'uploads/category/';

                unlink($uploadPath . basename($request->get('old_img')));
                // Generate a unique filename for the uploaded file
                $filename = uniqid() . '_' . $request->getFileName('avatar');

                $request->move('avatar', $uploadPath, $filename);
                $baseUrl = url('/');
                $imageUrl = $baseUrl . 'uploads/category/' . $filename;
                // $category_data['image'] = $imageUrl;
            } else {
                $imageUrl = $request->get('old_img');
            }


            if ($request->get('sub_category') != null) {
                $sub_category = $request->get('sub_category');
                $last_sub_category_index = null;

                for ($i = count($sub_category) - 1; $i >= 0; $i--) {
                    if ($sub_category[$i] !== "") {
                        $last_sub_category_index = $i;
                        break;
                    }
                }
            }

            $category_data = [
                'name' => $request->get('category'),
                'parent_id' => $request->get('sub_category') ? $sub_category[$last_sub_category_index] : null,
                'status' => $request->get('status'),
                'image' => $imageUrl
            ];


            $update_category = new Category;
            $update = $update_category->updateCategoryById($request->get('category_id'), $category_data);
            return responseJson(['status' => 'success', 'message' => 'Category Updated Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'errors', 'message' => $th]);
        }
    }

    public function list_all_category()
    {

        try {

            $category   = new Category;

            $allCat = $category->getCategory();

            if(count($allCat) > 0){
                return responseJson(['status' => 'success', 'data' => $allCat]);
            }
            return responseJson(['status' => 'error', 'message' => 'No Record Found']);

        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => $th]);
        }

    }

    public function get_category_name()
    {

        try {

            $request    = new Request;
            $category   = new Category;
            $allCat = $category->getCategoryByWhereIn($request->get('sub_category'));
            if(count($allCat) > 0){
                return responseJson(['status' => 'success', 'data' => $allCat]);
            }
            return responseJson(['status' => 'error', 'message' => 'No Record Found']);

        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => $th]);
        }

    }


    
}
