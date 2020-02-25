<?php

use Frame\Controller;

class RegLog extends Controller
{
    public function registerPage(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getRegLogLinks();
        $this->viewLoginRegister('register', $data);
    }

    public function loginPage(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getRegLogLinks();
        $this->viewLoginRegister('login', $data);
    }
}