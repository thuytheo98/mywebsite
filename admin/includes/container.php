<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo $DOMAIN;?>css/style-admin.css">
    <link rel="stylesheet" href="<?php echo $DOMAIN;?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $DOMAIN;?>bootstrap/fonts/all.css">
    <link rel="stylesheet" href="<?php echo $DOMAIN;?>bootstrap/fonts/solid.css">
    <link rel="stylesheet" href="<?php echo $DOMAIN;?>bootstrap/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $DOMAIN;?>bootstrap/js/bootstrap.js">
</head>
<body>
<div class="index">
    <?php
    require_once 'header.php';?>
    <div class="main-content">
        <?php require_once 'sidebar.php';?>
        <div class="content">
            <?php require_once 'content.php'?>
        </div>
    </div>
    <?php  require_once 'footer.php'; ?>
</div>
</body>
</html>