<?php

use Frame\Controller;

class Menu extends Controller
{
    public function getLinks(){
        return $this->db->select("SELECT * FROM menu");
    }

    public function getLinksLoginRegister(){
        return $this->db->select("SELECT * FROM RegLog");
    }
}

?>