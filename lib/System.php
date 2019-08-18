<?php
require_once("vendor/autoload.php");

class System
{
    public function get_OrderList(){
        $sql="SELECT * FROM `orderList` WHERE 1";
        $result=DB::connect()->prepare($sql);
        $result->execute();
        return $result;
    }
}
?>
