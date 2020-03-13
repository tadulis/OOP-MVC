<?php

use Frame\Controller;

class AdminModel extends Controller
{
    public function fiveUsersData()
    {
        return $this->db->select("SELECT * FROM `users` T ORDER BY `id` DESC LIMIT 5;");
    }

    public function allUsersdata()
    {
        return $this->db->select("SELECT * FROM `users`");
    }

    public function insertUser($userName, $userEmail, $userPassword, $userRole)
    {
        return $this->db->insert("INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$userName', '$userEmail', '$userPassword', '$userRole')");
    }
}