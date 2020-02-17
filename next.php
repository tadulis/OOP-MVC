<?php

// atvaizduoja visas PHP klaidas ekrane
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// nurodome jog bus pasiekiamos musu sukurtos klases
include_once 'Model.php';
include_once 'Controller.php';
include_once 'View.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

// priklausomai nuo masyve atsiradusio/neatsiradusio key action atvaizduojamas tam tikras mygtukas
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output();

?>