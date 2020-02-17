<?php

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

//     sukuriamas metodas kuris atvaizduos ekrane isvesti su bygtuku ir action aprasymu
    public function output() {
        return '<p><a href="next.php?action=clicked">' . $this->model->string . "</a></p>";
    }
}

?>