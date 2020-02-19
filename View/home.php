<?php
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
	<style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .menu-link {
            color: red;
            text-decoration: none;
            margin: 0 15px;
            border: 3px solid black;
            border-radius: 25%;
            padding: 0 15px;
        }
	</style>
</head>
<body>
    <h1>Home page</h1>
    <section>
        <?php $model->getUserByID(42); ?>
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