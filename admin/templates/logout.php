<?php
    if (isset($_GET["session"])) {
        require_once '../classes/Session.php';
        $session = new Session();
        $session->start();
        $session->destroy();
        new Redirect($DOMAIN);
    }
