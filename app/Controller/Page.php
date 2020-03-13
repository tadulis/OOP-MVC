<?php

use Frame\Controller;

class Page extends Controller
{
    public function home()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $this->view('home', $data);
    }

    public function car()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();

        $carsObj = $this->model('Car');
        $data['cars'] = $carsObj->carsFilter();

        $this->view('car', $data);
    }

    public function about()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        $data['rand'] = $this->db->select("SELECT `img`, `text` FROM `about` ORDER BY RAND() LIMIT 1");
        $this->view('about', $data);
    }

    public function contact()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinks();
        if (isset($_POST['sub_button'])) {
            $email = $_POST['sub_email'];
            $this->db->insert("INSERT INTO `subscribe`(`sub_email`) VALUES ('$email')");
        }
        $this->view('contact', $data);
    }
}

?>