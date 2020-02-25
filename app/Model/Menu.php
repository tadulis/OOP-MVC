<?php

class Menu
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

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