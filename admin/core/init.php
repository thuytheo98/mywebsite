<?php
    require_once "classes/DB.php";
    require_once "classes/Session.php";
    require_once "classes/Function.php";
    require_once "classes/Injection.php";
    //mở kết nối
    $db = new DB();
    $db ->connect();
    $db ->set_char("utf8");

    //injection
    $injection = new Injection();
    //session
    $session = new Session();
    $session ->start();
    //kiểm tra session
    if ($session->get() != '')
    {
        $user = $session->get();
    }
    else
    {
        $user = '';
    }
    //tạo đường dẫn, thông tin chung
    $DOMAIN = 'http://localhost/mywebsite/admin/';

    //thiết lập múi giờ chung
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_current = '';
    $date_current = date("Y-m-d H:i:sa");

