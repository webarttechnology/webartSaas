<?php

namespace Core;

use App\Controllers;
use App\Controllers\NotFoundController;

/* The Router class is responsible for handling routing in a PHP application, including matching routes
to URIs, calling the appropriate controller and method, and handling not found routes. */
class Router {

    private $routes;

    public function __construct() {
        // Load routes from web.php
        require_once  __DIR__ .'/../routes/web.php';

        $this->routes = $routes;
    }

    public function route($uri, $method) {

        if($method == 'POST'){
            
            if( strpos($uri, '/api') === false){
              $this->validateCsrfToken();
          }

          error_reporting(error_reporting() & ~E_WARNING);
      }

        $controllerPath = $this->routes[$method]['/'];

        if( is_array($this->routes[$method]['/']) )
        {
            $controllerPath = $this->routes[$method]['/'][0];

            if( !empty($this->routes[$method]['/'][1]) && is_array($this->routes[$method]['/'][1]))
            {
                foreach( $this->routes[$method]['/'][1] as $key => $value)
                {
                    if( $key == 'middleware' )
                    {
                        foreach ($value as $key => $middlewareArr) 
                        {
                            $middlewareClass = $middlewareArr[0];
                            $middlewareMethod = $middlewareArr[1];
                            // var_dump($middlewareClass);exit;
                            
                            $middlewareInstance = new $middlewareClass();

                            if (method_exists($middlewareInstance, $middlewareMethod)) {
                                $middlewareInstance->$middlewareMethod();
                            }
                        }
                    }
                }
            }

        } else {
            $controllerPath = $this->routes[$method]['/'];
        }

        
        if(empty($uri) || $uri == '/' && array_key_exists('/', $this->routes[$method]))
        {
            list($controllerName, $methodName) = explode('@', $controllerPath);
            $controllerName = CONTROLLER_PATH.$controllerName;

            if( class_exists($controllerName) )
            {
                $instance = new $controllerName();
                $instance->$methodName();

                return;
            }
        }   
        // Check if the URI has a trailing slash and redirect
        if ($uri !== rtrim($_SERVER['REQUEST_URI'], '/')) {
            header('Location: ' .rtrim($uri, '/'), true, 301);
            exit();
        }
        
        $uri = rtrim($uri, '/');
       
        // Iterate through the routes to find a match
        foreach ($this->routes[$method] as $routePattern => $handler) {
            // Escape special characters and replace dynamic segments with regex
            $regexPattern = str_replace('/', '\/', $routePattern);
            $regexPattern = preg_replace('/\{([^\/]+)\}/', '([^\/]+)', $regexPattern);
            
            // Check if the URI matches the pattern
            if (preg_match('/^' . $regexPattern . '$/', $uri, $matches)) {
                // Remove the full match from the $matches array
                array_shift($matches);
                
                // var_dump($handler);exit;
                if( is_array($handler) )
                {
                    $controllerPath = $handler[0];

                    if( !empty($handler[1]) && is_array($handler[1]))
                    {
                        foreach( $handler[1] as $key => $value)
                        {
                            if( $key == 'middleware' )
                            {
                                foreach ($value as $key => $middlewareArr) 
                                {
                                    $middlewareClass = $middlewareArr[0];
                                    $middlewareMethod = $middlewareArr[1];
                                    // var_dump($middlewareClass);exit;
                                    
                                    $middlewareInstance = new $middlewareClass();

                                    if (method_exists($middlewareInstance, $middlewareMethod)) {
                                        $middlewareInstance->$middlewareMethod();
                                    }
                                }
                            }
                        }
                    }

                }
                else {
                    $controllerPath = $handler;
                }

                list($controllerName, $methodName) = explode('@', $controllerPath);

                $controllerName = CONTROLLER_PATH.$controllerName;

                if( class_exists($controllerName) )
                {

                    $controller = new $controllerName();

                    // Call the specified method with dynamic parameters
                    call_user_func_array([$controller, $methodName], $matches);

                }else{

                    $this->handleNotFound();

                }
                
                return; // Exit the loop after finding a match
            }
        }

        // Handle not found or redirect to a default route
        $this->handleNotFound();
    }



    private function handleNotFound() {
        // Include the NotFoundController file

        // Create an instance of the NotFoundController
        $notFoundController = new NotFoundController();
    
        // Call the 404 method
        $notFoundController->show404();
    }


    private function validateCsrfToken() {

    
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('CSRF token validation failed. Access denied.');
        }

        // Remove the CSRF token from the session after successful validation
        // unset($_SESSION['csrf_token']);
    }

}






