<?php

include_once 'Database.php';

class Model extends Database
{
    public function getUserByID($id){
        $users = [];
        $db = new Database;
        $sql = "SELECT * FROM `users` WHERE `id` = $id";
        $user = $db->select($sql, $users);
        return $user;

    }

    public function getAllUsersData(){
        $users = [];
        $db = New Database();
        $sql = "SELECT * FROM `users`";
        return $db->select($sql, $users);
    }
}

?>