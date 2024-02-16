

<?php

// Import the necessary classes

use App\Middleware\AuthMiddleware;

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
        '/shop-detail'              => ['HomeController@shop_detail'],
        '/shop'                     => ['HomeController@shop'],
        '/terms'                    => ['HomeController@terms'],
        '/track-order'              => ['HomeController@track_order'],
        '/wishlist'                 => ['HomeController@wishlist'],
        '/blog'                     => ['HomeController@blog'],
        '/blog-single'              => ['HomeController@blog_single'],

        

        // Admin Route

        '/dw-admin'                  => ['AdminController@login'],
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
        '/dw-admin/add-product-category'   => ['AdminController@add_product_category',[
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

    ],

    'POST' => [
        '/dw-admin/admin-login-action'   => ['AdminController@Admin_Login_Action'],
        '/dw-admin/theme-upload'         => ['AdminController@theme_upload'],
        '/dw-admin/active-theme'         => ['AdminController@active_theme'],
    ],


    

];
