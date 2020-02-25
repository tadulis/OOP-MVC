<?php

use Frame\Controller;

class Page extends Controller
{

    public function home(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->view('home', $data);

        $user = $this->model('Users');
        $user->getUserByID(46);
    }

    public function apie(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->view('apie', $data);

        $users = $this->model('Users');
        $users->getAllUsersData();
    }

    public function kainos(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->view('kainos', $data);

        $form = $this->model('Users');
        $form->insertUpdateDeleteUser();
    }

    public function kontaktai(){
            $menu = $this->model('Menu');
            $data['menu'] = $menu->getLinks();
            $this->view('kontaktai', $data);
    }
}
?>