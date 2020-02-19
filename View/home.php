<?php
   include_once '../config.php';
   include_once '../Database.php';
   include_once '../Model/Form.php';
   include_once '../Model/Tables.php';
   include_once '../Model/Model.php';
   include_once '../Model/Menu.php';


   $model = New Model();
   $menu = New Menu();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <title><?= $data['header'] . " | " . CONFIG['site_title']; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
</head>
<body>
    <h1>Home page</h1>
    <section>
        <?php $model->getUserByID(45); ?>
    </section>
    <section>
        <?php $model->insertUpdateDeleteUser(); ?>
    </section>
    <section>
        <?php $model->getAllUsersData(); ?>
    </section>
    <section>
        <?php $menu->getMenu(); ?>
    </section>
</body>
</html>