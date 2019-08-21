<?php
    require_once("vendor/autoload.php");
    $order=new Hydroelectric;
    //print_r($_POST);
    for($i=0;$i<5;$i++){
        if(!empty($_POST["{$i}_roomNum"])&&!empty($_POST["{$i}_name"])&&!empty($_POST["{$i}_size"])&&!empty($_POST["{$i}_price"])){
            echo $_POST["{$i}_roomNum"]."<br>";
            $item=new Sundries($_POST["{$i}_roomNum"],$_POST["{$i}_name"],$_POST["{$i}_size"],$_POST["{$i}_price"]);
            $order->setItem($item);
        }
    }
    if(!isset($_SESSION))
        session_start();
    header("Location:Hydroelectric.php?order={$_SESSION['order']}");
 ?>
