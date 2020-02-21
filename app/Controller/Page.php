<?php

use Frame\Controller;

class Page extends Controller
{
    public function index(){
        $menu = $this->model("Menu");
        $data['menu'] = $menu->getLinks();
        $this->view('home', $data);
    }
}

?>