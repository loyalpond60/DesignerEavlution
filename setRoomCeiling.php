<?php
    require_once("vendor/autoload.php");
    $order=new Hydroelectric;
    $length=0;
    foreach ($_POST as $key => $value) {
        $key_value=explode("_",$key);   //0是roomNum 1是length || width
        if($key_value[1]=="length"){
            $length=$value;
        }else{

            $ceiling=new Ceiling($key_value[0],$length,$value);
            $order->setItem($ceiling);
        }
        //$order->setCeiling($key_value[0],$key_value[1],$value);
    }
 ?>
