<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Tables.php';
include_once 'Form.php';
include_once '../Database.php';



class Model extends Database
{
    public function getUserByID($id){
        $sql = "SELECT * FROM `users` WHERE `id` = $id";
        $userArray = $this->select($sql);

        $table = New Tables();
        return $table->printOneUserData($userArray);
    }

    public function getAllUsersData(){
        $sql = "SELECT * FROM `users`";
        $usersArray = $this->select($sql);

        $table = New Tables();
        return $table->printUserData($usersArray);
    }

    public function insertUpdateDeleteUser(){
        $form = New Form();
        $form->insertUserForm();

        if(isset($_POST['push'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['psw'];

            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $this->insert($sql);
        }elseif(isset($_POST['update'])){
             $name = $_POST['name'];
             $email = $_POST['email'];
             $password = $_POST['psw'];

             $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `email`='$email'";
             $this->update($sql);
         }elseif(isset($_POST['delete'])){
             $email = $_POST['email'];

             $sql = "DELETE FROM `users` WHERE `email` = '$email'";
             $this->remove($sql);
         }
    }
}
?>