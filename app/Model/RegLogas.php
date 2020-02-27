<?php

use Frame\Controller;

class RegLogas extends Controller
{
    public $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

    public function registerNewUser($array){
        $userName = $array['name'];
        $userEmail = $array['email'];
        $userPassword = $array['password'];
        $this->db->insert("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$userName', '$userEmail', '$userPassword')");
    }

}



?>