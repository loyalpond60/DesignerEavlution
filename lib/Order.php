<?php
require_once("vendor/autoload.php");

class Order
{
    private $orderNum;
    public function __construct(){
        session_start();
        $this->orderNum=$_SESSION['order'];
    }
    public function addRoom($name){
        $sql="INSERT INTO `room`(`id`, `orderNum`, `name`) VALUES (NULL,:order,:name)";
        $result=DB::connect()->prepare($sql);
        $result->execute(array('order'=>$this->orderNum,'name'=>$name));
    }
    public function getRoom(){
        $sql="SELECT * FROM `room` WHERE `orderNum`='$this->orderNum'";
        $result=DB::connect()->prepare($sql);
        $result->execute();
        return $result;
    }
    public function setCeiling($roomNum,$key,$value){
        $sql="SELECT COUNT(*) FROM `hydroelectricCeiling` WHERE `id`='$roomNum'";
        $result=DB::connect()->prepare($sql);
        $result->execute();
        $ans=$result->fetch();
        if($ans==0)
    //        $sql="INSERT INTO `hydroelectricCeiling`(`id`, `roomID`, `length`, `width`, `price`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])"
        echo $sql;
    }
}
?>
