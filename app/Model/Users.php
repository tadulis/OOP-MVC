<?php

use Frame\Controller;

class Users extends Controller
{
    public $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

    public function getUserByID($id){
         $user = $this->db->select("SELECT * FROM `users` WHERE `id` = $id");
         $table = $this->model('Tables');
         return  $table->printOneUserData($user);
    }

//     public function getAllUsersData(){
//         $sql = "SELECT * FROM `users`";
//         $usersArray = $this->select($sql);
//
//         $table = New Tables();
//         return $table->printUserData($usersArray);
//     }
//
//     public function insertUpdateDeleteUser(){
//         $form = New Form();
//         $form->insertUserForm();
//
//         if(isset($_POST['push'])){
//             $name = $_POST['name'];
//             $email = $_POST['email'];
//             $password = $_POST['psw'];
//
//             $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
//             $this->insert($sql);
//         }elseif(isset($_POST['update'])){
//              $name = $_POST['name'];
//              $email = $_POST['email'];
//              $password = $_POST['psw'];
//
//              $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `email`='$email'";
//              $this->update($sql);
//          }elseif(isset($_POST['delete'])){
//              $email = $_POST['email'];
//
//              $sql = "DELETE FROM `users` WHERE `email` = '$email'";
//              $this->remove($sql);
//          }

}
?>