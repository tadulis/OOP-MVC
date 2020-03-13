<?php

use Frame\Controller;

class LoginRegisterModel extends Controller
{
    public function checkRegister()
    {
        return $this->db->select("SELECT `email` FROM `users`");
    }

    public function insertRegister($name, $email, $password)
    {
        return $this->db->insert("INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");
    }

    public function pswByEmail($email)
    {
        return $this->db->select("SELECT `email`, `password`, `role` FROM `users` WHERE `email` = '$email'");
    }
}

?>