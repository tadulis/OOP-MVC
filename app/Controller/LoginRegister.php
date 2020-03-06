<?php

use Frame\Controller;

class LoginRegister extends Controller
{
    public function register(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->viewLoginRegister('register', $data);
    }

    public function login(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->viewLoginRegister('login', $data);
    }
}
?>