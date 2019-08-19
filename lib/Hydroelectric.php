<?php
require_once("vendor/autoload.php");

class Hydroelectric
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
    public function setItem(IItem $item){
        if(!empty($item->getLength()) && !empty($item->getLength())){
        if($item->getName()=="Ceiling" || $item->getName()=="Floor"){
            $sql="INSERT INTO `hydroelectric{$item->getName()}`(`id`, `roomID`, `length`, `width`)
                VALUES (NULL,{$item->getRoomNum()},{$item->getLength()},{$item->getWidth()})";
        }
        echo $sql."<br>";
        }
    }
}
?>
