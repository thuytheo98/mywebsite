<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    html {
        background: url('image/images.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    header{
        width: 100%;
        margin: 0 auto;
        padding: 10px 40px;
        overflow: auto;
        border-bottom: 1px solid #a6a6a1;
    }
    .left-header .logo{
        font-size: 50pt;
    }
    .right-header .navbar{
        margin: 15px 0;
    }
    .right-header .navbar .menu{
        list-style-type: none;
        margin: 0;
        padding: 0;
        float: right;
        font-size: 18pt;
    }
    ul{
        margin: 0;
    }
    .menu li{
        display: inline;
        margin-right: 30px;
        margin-top: 10px;
        border: 1px solid #0b2e13;
        background-color: #155724;
        color: #a6a6a1;
        border-radius: 5px;
        height: 30px;
        width: 40px;
    }
    .menu li a{
        text-decoration: none;
        color: #000;
        padding: 10px 10px;
        margin: 0;
        font-size: 20px;
        font-weight: 500;
    }
    .menu li a:hover{
        color: #ea704d;
    }
    footer{
        width: 100%;
        height: 300px;
        background-color: #454543;
        margin: 30px auto;
        padding: 20px;
        color: #ea704d;
        width: 100%;
        border-bottom: 1px solid #474745;
        content: "";
        clear: both;
    }
    footer .top-footer{
        list-style-type: none;
    }
    footer .top-footer .element-footer{
        float: left;
        margin-right: 100px;
        display: block;
        box-sizing: border-box;
    }
    footer .top-footer ul{
        list-style-type: none;
    }
    footer .top-footer li{
        margin: 10px;
        box-sizing: border-box;
    }
    footer .top-footer li a{
        text-decoration: none;
        color: #ECC74E;
        font-size: 15px;
    }
    footer .top-footer .public{

    }
    footer .bottom-footer{
        background-color: #000;
        color: #ECC74E;
        text-align: center;
    }

</style>
<body>
<?php include "includes/header.php" ?>
<?php //include "includes/footer.php" ?>
</body>
</html>


