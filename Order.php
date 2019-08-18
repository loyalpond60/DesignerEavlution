<?php
    require_once("vendor/autoload.php");
    session_start();
    $_SESSION['order']=$_GET['order'];
    
    $page=new OrderClient;
 ?>
