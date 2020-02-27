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
         $table->printOneUserData($user);
    }

    public function getAllUsersData(){
        $users = $this->db->select("SELECT * FROM `users`");
        $table = $this->model('Tables');
        $table->printUserData($users);
    }

    public function insertUpdateDeleteUser(){
        $form = $this->model('Forms');
        $form->insertUserForm();

        if(isset($_POST['push'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['psw'];

            $this->db->insert("INSERT INTO `users`(`name`, `email`, `password`) VALUES ($name', '$email', '$password')");
        }elseif(isset($_POST['update'])){
             $name = $_POST['name'];
             $email = $_POST['email'];
             $password = $_POST['psw'];

             $this->db->insert("UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `email`='$email'");
        }elseif(isset($_POST['delete'])){
             $email = $_POST['email'];

             $this->db->insert("DELETE FROM `users` WHERE `email` = '$email'");
        }
    }
}
?>