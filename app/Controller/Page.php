<?php

use Frame\Controller;

class Page extends Controller
{
    public function home(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->view('home', $data);
    }
}
?>