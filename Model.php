<?php

include_once 'Tables.php';
include_once 'Form.php';
include_once 'Database.php';

class Model extends Database
{
    public function getUserByID($id){
        $users = [];
        $db = new Database;
        $sql = "SELECT * FROM `users` WHERE `id` = $id";
        $userArray = $db->select($sql, $users);

        $table = New Tables();
        return $table->printOneUserData($userArray);
    }

    public function getAllUsersData(){

        $users = [];
        $db = New Database();
        $sql = "SELECT * FROM `users`";
        $usersArray = $db->select($sql, $users);

        $table = New Tables();
        return $table->printUserData($usersArray);
    }

//     public function insertUser(){
//         $form = New Form();
//         $form->insertUserForm();
//     }
}

$model = New Model();

$model->getAllUsersData();
$model->getUserByID(11);

?>