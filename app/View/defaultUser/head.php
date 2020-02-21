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
<nav>
    <?php
        foreach($data['menu'] as $button){
            print '<a class="menu-link" name="' . $button['name'] .  '" href="' . $button['link'] . '">' . $button['name'] . '</a>';
        }
    ?>
</nav>