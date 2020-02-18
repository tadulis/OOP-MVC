<?php

// atvaizduoja visas PHP klaidas ekrane
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// nurodome jog bus pasiekiamos musu sukurtos klases
include_once 'Database.php';
include_once 'Model.php';
include_once 'Controller.php';
include_once 'View.php';

$model = New Model();
$controller = New Controller($model);
$view = New View($model, $controller);

$userByID = $model->getUserByID(9);
$view->printUserData($model->getAllUsersData());
$view->printOneUserData($userByID);

?>