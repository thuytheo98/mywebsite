<?php
if(isset($_GET["router"])){
    $param = $_GET["router"];
    if(isset($_GET["crud"])){
        $param_child = $_GET["crud"];
        if(isset($_GET["id"]) && !isset($_GET["page"])){
            $param_id = $_GET["id"];
            header("location:index.php?router=$param&crud=$param_child&id=$param_id");
        }else if(isset($_GET["page"]) && isset($_GET["id"])){
            $page = $_GET["page"];
            $param_id = $_GET["id"];
            header("location:index.php?router=$param&crud=$param_child&id=$param_id&page=$page");
        }
        else{
            header("location:index.php?router=$param&crud=$param_child");
        }
    }else{
        $page = 1;
        if($_GET["page"]){
            $page = $_GET["page"];
        }
        header("location:index.php?router=$param&page=$page");
    }

}
?>
