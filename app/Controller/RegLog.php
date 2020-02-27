<?php

use Frame\Controller;

class RegLog extends Controller
{
    public function registerPage(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getRegLogLinks();

        if(isset($_POST['sukurti'])){
            $regLog = $this->model('RegLogas');
            $regLog->registerNewUser($_POST);
        }
        $this->viewLoginRegister('register', $data);
    }

    public function loginPage(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getRegLogLinks();
        $this->viewLoginRegister('login', $data);
    }
}