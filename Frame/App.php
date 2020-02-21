<?php

namespace Frame;

use Frame\Database;

class App
{

    protected $controller = "Page";
    protected $method = "index";
    protected $args = [];
    protected $db;

    public function __construct()
    {
         $this->db = new Database();

        // parse the URL (explode on / char)
        $url = $this->parseUrl();

        if (file_exists('app/Controller/' . $url[0] . '.php')) {

            // set current controller
            $this->controller = $url[0];

            // remove the name from url
            array_shift($url);

        }

        // lazy-load required controller
        require_once 'app/Controller/' . $this->controller . '.php';

        // instantiate this controller with dependency injection
        $this->controller = new $this->controller($this->db);

        // check for method
        if (isset($url[0])) {

            if (method_exists($this->controller, $url[0])) {

                // set current method
                $this->method = $url[0];
                array_shift($url);
            }

        }

        // Check for arguments
        $this->args = $url ? $url : [];

        // Call actual controller and method with arguments
        call_user_func_array([$this->controller, $this->method], $this->args);
    }


//     We convert url to array to be used as [controller]/[method]/[argument 1]/[argument 2]...
    protected function parseUrl()
    {
        if (isset($_GET['url'])) {

            return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
    }
}