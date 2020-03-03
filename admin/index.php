<?php
    require_once 'core/init.php';
    //kiểm tra đăng nhập
    if($user){
        require_once 'includes/container.php';
    }else{
        require_once 'templates/login.php';
    }
