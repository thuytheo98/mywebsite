<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?php $DOMAIN?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php $DOMAIN?>bootstrap/fonts/all.css">
    <link rel="stylesheet" href="<?php $DOMAIN?>bootstrap/js/bootstrap.js">
</head>
<body>
<?php //include "admin/core/init.php" ?>
<?php include "includes/header.php" ?>
<?php //include "includes/footer.php" ?>
<style type="text/css">
    html {
        background: url('image/download.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .header .right-header{
        margin: 15px 0;
    }
    .header .right-header .logo img{
        width: 100px;
        height: 40px;
        border-radius: 20px;
    }
    .right-header .menu{
        list-style: none;
        margin: 0;
        padding: 0;
        float: left;
        font-size: 15pt;
    }
    .right-header .menu li{
        float: left;
        margin: 0 20px;
        border: 1px solid #1b1e21;
        background-color: #ed969e;
        border-radius: 8px;
        height: 40px;
    }
    .right-header .menu li a{
        text-decoration: none;
        display: flex;
        align-content: center;
        color: black;
        padding: 10px;
        margin-bottom: 10px;
        font-weight: 500;
        font-family: SansSerif;
    }
    .right-header .menu li a:hover{
        color: #e4606d;
        background-color: white;
        border-radius: 8px;
    }
    .left-header{
        float: right;
        margin-right: 10px;
    }
    .left-header ul{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .left-header ul .ngaongo{
        color: #ed969e;
    }
    .left-header ul li{
        float: right;
        margin-right: 30px;
    }
    .left-header ul li a{
        text-decoration: none;
        color: #ed969e;
        display: flex;
        align-content: center;
        margin-bottom: 10px;
    }
</style>

</body>
</html>


