<?php

class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

//     sukuriamas metodas kuris bus iskvieciamas kai bus paspaustas mygtukas/nuoroda
    public function clicked() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}

?>