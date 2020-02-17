<?php

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

//     aprasomas metodas kuris sukuria lentelem prasuka foreach ir isskirsto objekto masyva i td tagus
    public function output($userData) {
        print '<table>';
        foreach($userData as $data){
            print '<td>' . $data . '</td>';
        }
        print '</table>';
    }
}

?>