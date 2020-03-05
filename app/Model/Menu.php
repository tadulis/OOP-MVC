<?php

use Frame\Controller;

class Menu extends Controller
{
    public function getLinks(){
        $menu = $this->db->select("SELECT * FROM menu");
        return $menu;
    }

    public function getRegLogLinks(){
            $menu = $this->db->select("SELECT * FROM RegLog");
            return $menu;
        }
}

?>