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
    public function addOrder($orderNum,$name){
        $sql="INSERT INTO `orderList`(`id`, `orderNum`, `name`) VALUES (NULL,:orderNum,:name)";
        $result=DB::connect()->prepare($sql);
        $result->execute(array('orderNum'=>$orderNum,'name'=>$name));
        return $result;
    }
}
?>
