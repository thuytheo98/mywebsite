<?php
	if(isset($_GET['page']) && !isset($_GET['crud'])){
	    $page = $_GET['page'];
	    include ("content/$page/$page.php");
    }
	if(isset($_GET['page'])){
	    if(isset($_GET['crud'])&&  !isset($_GET['id'])){
            $page_name = $_GET['page'];
            $crud_name = $_GET['crud'];
            include ("content/$page_name/$crud_name.php");
        }
    }
    if(isset($_GET['page']) && isset($_GET['crud'])){
        if(isset($_GET['id'])){
            $page_name = $_GET['page'];
            $crud_name = $_GET['crud'];
            include ("content/$page_name/$crud_name.php");
        }
    }else{
        include ("index.php");
}
