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
}

?>