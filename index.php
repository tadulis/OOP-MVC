<?php

// atvaizduoja visas PHP klaidas ekrane
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// nurodome jog bus pasiekiamos musu sukurtos klases
include_once 'Model.php';
include_once 'Controller.php';
include_once 'View.php';

// Sukuriamas objektas panaudojus klase Model
$model = new Model();
// Sukuriamas objektas panaudojus klase Controller
$controller = new Controller($model);
// Sukuriamas objektas panaudojus klase View
$view = new View($controller, $model);
// Sukurus visus reikiamus objektus ir ju metodus i index.php ekrana atvaizduojama reiksme panaudojant metoda output()
echo $view->output();
?>