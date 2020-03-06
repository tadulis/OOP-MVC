<?php

use Frame\Controller;

class Menu extends Controller
{
    public function getLinks(){
        $menu = $this->db->select("SELECT * FROM menu");
        return $menu;
    }
}

?>