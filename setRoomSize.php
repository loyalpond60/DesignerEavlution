<?php
    require_once("vendor/autoload.php");
    $order=new Order;

    foreach ($_POST as $key => $value) {
        $key_value=explode("_",$key);   //0是roomNum 1是length || width
        $order->setCeiling($key_value[0],$key_value[1],$value);
    }
 ?>
