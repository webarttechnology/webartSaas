

<?php

// Import the necessary classes

use App\Middleware\AuthMiddleware;
use App\Middleware\UserAuthMiddleware;

// Define your routes
$routes = [
    'GET' => [

        ////// User route

        '/'                         => ['HomeController@index'],
        '/about'                    => ['HomeController@about'],
        '/contact-us'               => ['HomeController@contact_us'],
        '/checkout'                 => ['HomeController@checkout'],
        '/faq'                      => ['HomeController@faq'],
        '/cart'                     => ['HomeController@cart'],
        '/gallery'                  => ['HomeController@gallery'],
        '/register'                 => ['HomeController@register'],
        '/my-account'               => ['HomeController@my_account'],
        '/shop-detail/{prod_name}/{id}'              => ['HomeController@shop_detail'],
        '/shop'                     => ['HomeController@shop'],
        '/terms'                    => ['HomeController@terms'],
        '/track-order'              => ['HomeController@track_order'],
        '/wishlist'                 => ['HomeController@wishlist'],
        '/blog'                     => ['HomeController@blog'],
        '/blog-single'              => ['HomeController@blog_single'],

        ///// Tushar Nayak ///

        '/get-cart'                 => ['HomeController@getCart'],
        '/cart-data'                => ['HomeController@cartData'],
        '/product-data'             => ['AdminController@productData'],

        '/logout'         => [
            'HomeController@logout', [
                'middleware' => [
                    [UserAuthMiddleware::class, 'index']
                ]
            ]
        ],



        

        // Admin Route
        
        '/dw-admin'                  => ['AdminController@login'],
        '/dw-admin/reset-password'                  => ['AdminController@reset_password'],
        '/dw-admin/new-password'                  => ['AdminController@new_password'],
        '/dw-admin/sign-up'                       => ['AdminController@sign_up'],
        '/dw-admin/coming-soon'                       => ['AdminController@coming_soon'],

        '/dw-admin/dashboard'        => ['AdminController@dashboard', [
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                        
        '/dw-admin/product'          => ['AdminController@product',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/add-product'      => ['AdminController@add_product',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        '/dw-admin/edit-product/{id}'      => ['AdminController@edit_product',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                    
       
        '/dw-admin/categories'   => ['AdminController@categories',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        '/dw-admin/add-category'   => ['AdminController@add_category',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],
        '/dw-admin/edit-category/{id}'   => ['AdminController@edit_category',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],
        '/dw-admin/add-variation'   => ['AdminController@add_variation',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/single-product'   => ['AdminController@single_product',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/order-list'       => ['AdminController@order_list',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/order-details'    => ['AdminController@order_details',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        
        '/dw-admin/add-order'    => ['AdminController@add_order',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        
        '/dw-admin/edit-order'    => ['AdminController@edit_order',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 

        '/dw-admin/invoice'    => ['AdminController@invoice',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],
        
        '/dw-admin/create-invoice'    => ['AdminController@create_invoice',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],

        
        
        '/dw-admin/getting-started'    => ['AdminController@getting_started',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],           
        
        '/dw-admin/customer-list'    => ['AdminController@customer_list',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/customer-details' => ['AdminController@customer_details',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/order-history'    => ['AdminController@order_history',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/theme'            => ['AdminController@theme',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        
        '/dw-admin/theme-store'            => ['AdminController@theme_store',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        '/dw-admin/theme-details/{name}'    => ['AdminController@theme_details',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/settings'         => ['AdminController@settings',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],                   
        '/dw-admin/logout'           => ['AdminController@logout',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 
        
        '/dw-admin/location-data'           => ['SettingsController@location_data',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  
        
        '/dw-admin/vendor'           => ['AdminController@vendor',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  

        '/dw-admin/vendor-store-list/{id}'           => ['AdminController@vendor_store_list',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  

        '/dw-admin/vendor-store/{id}'           => ['AdminController@vendor_store',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  

        '/dw-admin/vendor-product-details/{id}'           => ['AdminController@vendor_product_details',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],
        
        
        '/dw-admin/reset-password'                        => ['AdminController@forgotPassword'],
        '/dw-admin/password/resetdata/{token}/{id}'       => ['AdminController@showResetForm'],


        '/dw-admin/coupon'         => ['CouponController@coupon',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  
        '/dw-admin/add-coupon'         => ['CouponController@addCoupon',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ],  

        '/dw-admin/edit-coupon/{id}'      => ['CouponController@edit_coupon',[
            'middleware' => [
                [AuthMiddleware::class, 'index']
            ]
            ]
        ], 

    ],

    'POST' => [
        '/dw-admin/admin-login-action'  => ['AdminController@Admin_Login_Action'],
        '/dw-admin/theme-upload'        => ['AdminController@theme_upload'],
        '/dw-admin/active-theme'        => ['AdminController@active_theme'],
        '/dw-admin/save-location'       => ['SettingsController@save_location'],
        '/dw-admin/make-default'        => ['SettingsController@make_defaultlocation'],
        '/dw-admin/delete-location'     => ['SettingsController@delete_location'],
        '/dw-admin/get-states'          => ['SettingsController@getStates'],
        '/dw-admin/get-city'            => ['SettingsController@getCities'],
        '/dw-admin/save-store'          => ['SettingsController@save_store'],
        '/dw-admin/save-category'       => ['CategoryController@save_category'],
        '/dw-admin/get-category'        => ['CategoryController@getCategory'],
        '/dw-admin/password/email'      => ['AdminController@sendresetLinkemail'],
        '/dw-admin/password/reset'      => ['AdminController@resetPassword'],
        '/dw-admin/update-category'     => ['CategoryController@update_category'],
        '/dw-admin/get-category-name'   => ['CategoryController@get_category_name'],
        '/dw-admin/list-all-category'   => ['CategoryController@list_all_category'],
        '/dw-admin/save-settings'       => ['SettingsController@save_settings'],
        '/dw-admin/store-product'       => ['ProductController@store_product'],
        '/dw-admin/upload-product-img'  => ['ProductController@upload_product_img'],
        '/dw-admin/update-product'      => ['ProductController@update_product'],


        ///////// User /////

        ///// Tushar Nayak ///
        '/register-account'             => ['HomeController@registerAccount'],
        '/send-otp'                     => ['HomeController@sendOtp'],
        '/dw-admin/remove-media-file'   => ['ProductController@remove_media_file'],

        ///Manage Cart
        '/manage-cart'                  => ['CartController@manageCart'],
        '/get-country'                  => ['CheckoutController@get_country'],

        '/dw-admin/save-coupon'         => ['CouponController@save_coupon'],
        '/dw-admin/delete-coupon'       => ['CouponController@delete_coupon'],

        '/get-coupon'                   => ['HomeController@getCoupon'],

        '/dw-admin/save-vendor-product'  => ['ProductController@save_vendor_product'],
        '/dw-admin/delete-store-product' => ['ProductController@delete_store_product'],

       

    ],


    

];
