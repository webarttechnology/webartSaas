<?php

namespace App\Controllers;

use Exception;
use Core\Request;
use Core\Controller;
use Core\Validation;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{


    public function store_product()
    {

        try {

            $request = new Request;

            // fire($request->all());

            // fire($request->get('kt_ecommerce_add_product_options'));

            $rules = [
                'product_name'  =>  ['required'],
                'price'         =>  ['required'],
                'status'        =>  ['required'],
                'category'      =>  ['required'],
                'sku'           =>  ['required'],
                'barcode'       =>  ['required'],
                'shelf'         =>  ['required'],
                'tax'           =>  ['required'],
                'avatar'        =>  ['file', 'fileType:jpg, jpeg, png', 'maxFileSize:2024'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            if ($request->get('tax') != 'Tax Free') {
                if ($request->get('vat_amount') == null) {
                    return responseJson(['status' => 'error', 'message' => 'Vat amount field is required']);
                }
            }

            $imageFile = $request->getFile('avatar');

            $product_tags = json_decode($request->get('kt_ecommerce_add_product_tags'), true);
            $meta_keywords = json_decode($request->get('kt_ecommerce_add_product_meta_keywords'), true);

            if (count(array_filter($imageFile)) > 1) {

                // Define the directory where you want to save the uploaded file
                $uploadPath = PUBLIC_PATH . 'uploads/product/';

                // Generate a unique filename for the uploaded file
                $filename = uniqid() . '_' . $request->getFileName('avatar');

                $request->move('avatar', $uploadPath, $filename);
                $baseUrl = url('/');
                $imageUrl = $baseUrl . 'uploads/product/' . $filename;
                $product_thumb_image = $imageUrl;
            } else {
                $product_thumb_image = null;
            }


            $media = $this->upload_media($_FILES['media']);

            if ($media) {
                if ($media['status'] == 'error') {
                    return responseJson(['status' => 'error', 'message' => $media['msg']]);
                }
            }


            if ($request->get('discount_option') == 1) {
                $discount_option  = 'No Discount';
                $discount_amount  = null;
            } else if ($request->get('discount_option') == 1) {
                $discount_option  = 'Fixed';
                $discount_amount  = $request->get('dicsounted_price');
            } else {
                $discount_option  = 'Percentage';
                $discount_amount  = $request->get('discount_label');
            }



            if ($request->get('shipping') == 1) {

                $rules = [
                    'weight'        =>  ['required'],
                    'width'         =>  ['required'],
                    'height'        =>  ['required'],
                ];

                $validator = Validation::make($request->all(), $rules);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    return responseJson(['status' => 'errors', 'message' => $errors]);
                }

                $product_type = 'Physical';
                $weight  = $request->get('weight');
                $width   = $request->get('width');
                $height  = $request->get('height');
                $length  = $request->get('length');
            } else {
                $product_type = 'Digital';
                $weight  = null;
                $width   = null;
                $height  = null;
                $length  = null;
            }

            //fire($_FILES['media']);

            $data  = [
                'name'          => $request->get('product_name'),
                'description'   => $request->get('product_description'),
                'thumb_img'     => $product_thumb_image,
                'base_price'    => $request->get('price'),
                'shelf_qty'     => $request->get('shelf'),
                'tags'          => implode(', ', array_column($product_tags, 'value')),
                'meta_title'    => $request->get('meta_title'),
                'meta_description' => $request->get('product_meta_description'),
                'meta_keyword'     => implode(', ', array_column($meta_keywords, 'value')),
                'allow_backorder'  => $request->get('allow_backorders') ?? null,
                'sku'           => $request->get('sku'),
                'barcode'       => $request->get('barcode'),
                'discount_type' => $discount_option,
                'product_type'  => $product_type,
                'weight'        => $weight,
                'width'         => $width,
                'height'        => $height,
                'length'        => $length,
                'discount'      => $discount_amount,
                'status'        => ucfirst($request->get('status')),
                'tax_type'      => $request->get('tax'),
                'vat_amount'    => $request->get('tax') == 'Tax Free' ? null : $request->get('vat_amount'),
            ];

            $product = new Product;

            $result = $product->createProduct($data);

            if ($result) {

                ///// Add Category With Product Id

                foreach ($request->get('category') as  $value) {
                    $product->createProductCategory([
                        'product_id'     => $result->id,
                        'category_id'    => $value,
                    ]);
                }


                ///// Add Media With Product Id
                if ($media['status'] == 'success') {
                    foreach ($media['data'] as  $item) {
                        $product->createProductMedia([
                            'product_id'    => $result->id,
                            'media_path'    => $item,
                        ]);
                    }
                }

                /////// Product Variation Add
                if (count($request->get('kt_ecommerce_add_product_options')) > 0) {
                    foreach ($request->get('kt_ecommerce_add_product_options') as  $option) {
                        if (!empty($option['product_option']) && !empty($option['product_option_value'])) {
                            $product->createProductVariation([
                                'product_id'    => $result->id,
                                'option'        => $option['product_option'],
                                'value'         => $option['product_option_value'],
                            ]);
                        }
                    }
                }
            }

            return responseJson(['status' => 'success', 'type' => 'add', 'message' => 'Product Added Successfully']);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => $th]);
        }
    }

    public function update_product()
    {

        // try {

        $request = new Request;

        $rules = [
            'product_name'  =>  ['required'],
            'price'         =>  ['required'],
            'status'        =>  ['required'],
            'category'      =>  ['required'],
            'sku'           =>  ['required'],
            'barcode'       =>  ['required'],
            'shelf'         =>  ['required'],
            'tax'           =>  ['required']
        ];

        $validator = Validation::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return responseJson(['status' => 'errors', 'message' => $errors]);
        }


        if ($request->get('tax') != 'Tax Free') {
            if ($request->get('vat_amount') == null) {
                return responseJson(['status' => 'error', 'message' => 'Vat amount field is required']);
            }
        }


        $imageFile = $request->getFile('avatar');

        $product_tags = json_decode($request->get('kt_ecommerce_add_product_tags'), true);

        $meta_keywords = json_decode($request->get('kt_ecommerce_add_product_meta_keywords'), true);

        if (count(array_filter($imageFile)) > 1) {

            $rules = [
                'avatar'   =>  ['file', 'fileType:jpg, jpeg, png', 'maxFileSize:2024'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            // Define the directory where you want to save the uploaded file
            $uploadPath = PUBLIC_PATH . 'uploads/product/';

            // Generate a unique filename for the uploaded file
            $filename = uniqid() . '_' . $request->getFileName('avatar');

            $request->move('avatar', $uploadPath, $filename);
            $baseUrl = url('/');
            $imageUrl = $baseUrl . 'uploads/product/' . $filename;
            $product_thumb_image = $imageUrl;


            $base_url = (string)url('/');

            $media_url = PUBLIC_PATH . substr($request->get('old_avatar'), strlen($base_url));

            unlink($media_url);
        } else {
            $product_thumb_image = $request->get('old_avatar');
        }


        // fire($_FILES['media']);

        if ($_FILES['media']) {
            $media = $this->upload_media($_FILES['media']);
            if ($media) {
                if ($media['status'] == 'error') {
                    return responseJson(['status' => 'error', 'message' => $media['msg']]);
                }
            }
        }

        if ($request->get('discount_option') == 1) {
            $discount_option  = 'No Discount';
            $discount_amount  = null;
        } else if ($request->get('discount_option') == 1) {
            $discount_option  = 'Fixed';
            $discount_amount  = $request->get('dicsounted_price');
        } else {
            $discount_option  = 'Percentage';
            $discount_amount  = $request->get('discount_label');
        }



        if ($request->get('shipping') == 1) {

            $rules = [
                'weight'        =>  ['required'],
                'width'         =>  ['required'],
                'height'        =>  ['required'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }

            $product_type = 'Physical';
            $weight  = $request->get('weight');
            $width   = $request->get('width');
            $height  = $request->get('height');
            $length  = $request->get('length');
        } else {
            $product_type = 'Digital';
            $weight  = null;
            $width   = null;
            $height  = null;
            $length  = null;
        }

        //fire($_FILES['media']);

        $data  = [
            'name'          => $request->get('product_name'),
            'description'   => $request->get('product_description'),
            'thumb_img'     => $product_thumb_image,
            'base_price'    => $request->get('price'),
            'shelf_qty'     => $request->get('shelf'),
            'tags'          => $product_tags ? implode(', ', array_column($product_tags, 'value')) : null,
            'meta_title'    => $request->get('meta_title'),
            'meta_description' => $request->get('product_meta_description'),
            'meta_keyword'     => $meta_keywords ? implode(', ', array_column($meta_keywords, 'value')) : null,
            'allow_backorder'  => $request->get('allow_backorders') ?? null,
            'sku'           => $request->get('sku'),
            'barcode'       => $request->get('barcode'),
            'discount_type' => $discount_option,
            'product_type'  => $product_type,
            'weight'        => $weight,
            'width'         => $width,
            'height'        => $height,
            'length'        => $length,
            'discount'      => $discount_amount,
            'status'        => ucfirst($request->get('status')),
            'tax_type'      => $request->get('tax'),
            'vat_amount'    => $request->get('tax') == 'Tax Free' ? null : $request->get('vat_amount'),
        ];

        $product = new Product;

        $result = $product->updateProduct($request->get('product_id'), $data);

        if ($result) {

            ////// Delete Old Product category ///////
            $product->deleteOldProductCategory($request->get('product_id'));
            ///// Add Category With Product Id
            foreach ($request->get('category') as  $value) {
                $product->createProductCategory([
                    'product_id'     => $request->get('product_id'),
                    'category_id'    => $value,
                ]);
            }

            ///// Add Media With Product Id
            if ($media['status'] == 'success') {
                foreach ($media['data'] as  $item) {
                    $product->createProductMedia([
                        'product_id'    => $request->get('product_id'),
                        'media_path'    => $item,
                    ]);
                }
            }

            /////// Product Variation Add
            if (count($request->get('kt_ecommerce_add_product_options')) > 0) {
                //////  Old Product Variation Delete //////
                $product->deleteOldProductVeriation($request->get('product_id'));

                foreach ($request->get('kt_ecommerce_add_product_options') as  $option) {
                    if (!empty($option['product_option']) && !empty($option['product_option_value'])) {
                        $product->createProductVariation([
                            'product_id'    => $request->get('product_id'),
                            'option'        => $option['product_option'],
                            'value'         => $option['product_option_value'],
                        ]);
                    }
                }
            }
        }

        return responseJson(['status' => 'success', 'type' => 'update', 'message' => 'Product Updated Successfully']);

        // } catch (\Throwable $th) {
        //     return responseJson(['status' => 'error', 'message' => $th]);
        // }
    }

    public function upload_product_img()
    {
        $request = new Request;
        echo "Upload File";
    }

    public function upload_media($media)
    {
        $data  = [];

        $targetDir = PUBLIC_PATH . 'uploads/product/';
        // Specify allowed file extensions
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        // Specify maximum file size in KB
        $maxFileSize = 2024; // 2mb

        // Check if files are present in the request
        if (!empty($media['name'])) {
            // Iterate over each uploaded file
            foreach ($media['tmp_name'] as $index => $fileTmpName) {
                // Get the name, temporary path, and error status of the file
                $fileName = $media['name'][$index];
                $fileError = $media['error'][$index];
                $fileSize = $media['size'][$index];

                // Get the file extension
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                // Check if the file has a valid extension and does not exceed the maximum file size
                if (in_array($fileExtension, $allowedExtensions) && $fileError === UPLOAD_ERR_OK && $fileSize <= $maxFileSize * 1024) {
                    // Generate a unique name for the file to prevent conflicts
                    $newFileName = uniqid() . '_' . $fileName;
                    $destination = $targetDir . $newFileName;
                    $mediaUrl =  url('/') . 'uploads/product/' . $newFileName;

                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $dataMedia[] = $mediaUrl;
                        $data  = [
                            'status'    => 'success',
                            'data'      =>  $dataMedia,
                        ];
                    } else {
                        $data  = [
                            'status'   => 'error',
                            'msg'      =>  "Error uploading file"
                        ];
                    }
                } else {
                    // Display an error message for invalid file types or sizes
                    $data  = [
                        'status'   => 'error'
                    ];

                    if (!in_array($fileExtension, $allowedExtensions)) {
                        $data['msg'] .= "Invalid file type. Allowed types: " . implode(', ', $allowedExtensions) . ". ";
                    }
                    if ($fileSize > $maxFileSize * 1024) {
                        $data['msg'] .= "File size exceeds the maximum limit of $maxFileSize KB. ";
                    }
                }
            }
        } else {
            $data  = [
                'status'   => 'error',
                'msg'      =>  "The Media field is required."
            ];
        }

        return $data;
    }

    public function remove_media_file()
    {
        try {

            $request = new Request;

            $product  = new Product;

            if ($request->get('type') == 'media') {

                $media = $product->getProductMediaFile($request->get('id'));

                $base_url = (string)url('/');

                $media_url = PUBLIC_PATH . substr($media->media_path, strlen($base_url));

                unlink($media_url);

                $product->deleteProductMedia($request->get('id'));

                $msg  = 'Media Delete Successfully';
            } else {

                $product->deleteProductCategory($request->get('id'));
                $msg  = 'Category Delete Successfully';
            }

            return responseJson(['status' => 'success', 'message' => $msg]);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => 'Something error please try later']);
        }
    }


    public function save_vendor_product()
    {
        try {

            $request = new Request;

            // fire($request->all());

            $rules = [
                'sub_category'  =>  ['required'],
                'variant_data'  =>  ['required'],
            ];

            $validator = Validation::make($request->all(), $rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return responseJson(['status' => 'errors', 'message' => $errors]);
            }
            $data  = [
                'sku'                => $request->get('sku'),
                'is_vendor'          => '1',
                'vendor_id'          => '1',
                'name'               => $request->get('name'),
                'vendor_product_id'  => $request->get('vendor_prod_id'),
                'thumb_img'          => $request->get('thumb_image'),
                'base_price'         => $request->get('price'),
                // 'percentage'          => $request->get('percentage'),
            ];
            $product = new Product;
            if ($request->get('type') == "add") {
                $checkvendorid = $product->checkvendorproduct($request->get('vendor_prod_id'));
                // fire($checkvendorid);
                if ($checkvendorid == true) {
                    $remove = $product->deleteProductByVendorid($request->get('vendor_prod_id'));
                    if ($remove == true) {
                        $result = $product->updateProduct($request->get('prod_id'), $data);
                    }
                } else {
                    $result = $product->createProduct($data);
                }
            } else {
                $result = $product->updateProduct($request->get('prod_id'), $data);
            }
            if ($result) {
                $sub_category = $request->get('sub_category');
                $last_sub_category_index = null;

                for ($i = count($sub_category) - 1; $i >= 0; $i--) {
                    if ($sub_category[$i] !== "") {
                        $last_sub_category_index = $i;
                        break;
                    }
                }
                if ($request->get('type') == "add") {
                    $product->createProductCategory([
                        'product_id'     => $result->id ?? $request->get('prod_id'),
                        'category_id'    => $sub_category[$last_sub_category_index],
                    ]);
                } else {
                    $product->updateProductCategory($request->get('prod_id'), [
                        'category_id'    => $sub_category[$last_sub_category_index],
                    ]);
                }


                foreach ($request->get('variant_data') as  $value) {
                    if ($request->get('type') == "add") {
                        $product->createVendorVariants([
                            'product_id'         => $result->id ?? $request->get('prod_id'),
                            'variant_id'         => $value['vid'],
                            'variant_product_id' => $value['pid'],
                            'variant_price'      => $value['price'],
                        ]);
                    } else {
                        $product->updateVendorVariants($value['vid'], [
                            'variant_price'      => $value['price'],
                        ]);
                    }
                }
                if ($request->get('type') == "add") {
                    foreach ($request->get('prod_image') as  $item) {
                        $product->createProductMedia([
                            'product_id'    => $result->id ?? $request->get('prod_id'),
                            'media_path'    => $item,
                        ]);
                    }
                }
            }

            if ($request->get('type') == "add") {
                $msg = 'Product Added Successfully';
            } else {
                $msg = 'Product Updated Successfully';
            }
            return responseJson(['status' => 'success', 'type' => 'add', 'message' => $msg]);
        } catch (\Throwable $th) {
            return responseJson(['status' => 'error', 'message' => $th]);
        }
    }

    public function delete_store_product()
    {
        $request = new Request;
        // fire($request->all());
        $product = new Product;
        $product->deleteStoreProduct($request->get('id'));
        return responseJson(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
