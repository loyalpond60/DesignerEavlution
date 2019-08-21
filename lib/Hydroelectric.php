<?php
require_once("vendor/autoload.php");

class Hydroelectric
{
    private $orderNum;
    public function __construct(){
        if(!isset($_SESSION))
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
    private function is_Item($roomID,$name){
        if($name=="Ceiling"||$name=="Floor"){
            $sql="SELECT COUNT(*) FROM `hydroelectric$name` WHERE `roomID`=$roomID";
//            echo $sql;
        }else{
            $sql="SELECT COUNT(*) FROM `hydroelectricItem` WHERE `roomID`='$roomID' AND `name`='$name'";
            //echo $sql;
        }
        $result=DB::connect()->prepare($sql);
        $result->execute();
        $ans=$result->fetch();
        //echo $ans."<br><br>";
        if($ans[0]==0)
            return 0;
        else
            return 1;
    }
    public function setItem(IItem $item){
        if(!empty($item->getLength()) && !empty($item->getLength())){
            if(!$this->is_Item($item->getRoomNum(),$item->getName())){
                echo $this->is_Item($item->getRoomNum(),$item->getName())."<br><br>";
                if($item->getName()=="Ceiling" || $item->getName()=="Floor"){
                    $sql="INSERT INTO `hydroelectric{$item->getName()}`(`id`, `roomID`, `length`, `width`)
                        VALUES (NULL,'{$item->getRoomNum()}',
                                     '{$item->getLength()}',
                                     '{$item->getWidth()}')";
                }else{
                    $sql="INSERT INTO `hydroelectricItem`(`id`, `roomID`,`name`, `length`,`price`)
                        VALUES (NULL,'{$item->getRoomNum()}',
                                     '{$item->getName()}',
                                     '{$item->getLength()}',
                                     '{$item->getPrice()}')";

                }
            }else{
                echo $this->is_Item($item->getRoomNum(),$item->getName())."<br><br>";
                if($item->getName()=="Ceiling" || $item->getName()=="Floor"){
                    $sql="UPDATE `hydroelectric{$item->getName()}`
                        SET `length`='{$item->getLength()}',
                            `width` ='{$item->getWidth()}'
                        WHERE `roomID`={$item->getRoomNum()}";
                }else{
                    $sql="UPDATE `hydroelectricItem`
                        SET `length`='{$item->getLength()}',
                            `price` ='{$item->getPrice()}'
                        WHERE `roomID`='{$item->getRoomNum()}'
                            AND `name`='{$item->getName()}'";
                    // ITEM
                }
            }
            echo $sql."<br>";
            $result=DB::connect()->prepare($sql);
            $result->execute();
        }
    }
    public function getItem($item,$orderNum){
        if($item=="Ceiling" || $item=="Floor"){
            $sql="SELECT * FROM `hydroelectric$item`,`room`
                WHERE `hydroelectric$item`.`roomID`=`room`.`id`
                AND `room`.`orderNum`=:orderNum";
            $result=DB::connect()->prepare($sql);
            $result->execute(array('orderNum'=>$orderNum));
            $itemValue=array();
            foreach($result as $row){
                $tempItem=new $item($row['roomID'],$row['length'],$row['width']);
                array_push($itemValue,$tempItem);
            }
        }else{
            $sql="SELECT * FROM `hydroelectric$item`,`room`
                WHERE `hydroelectric$item`.`roomID`=`room`.`id`
                AND `room`.`orderNum`=:orderNum";
            $result=DB::connect()->prepare($sql);
            $result->execute(array('orderNum'=>$orderNum));
            $itemValue=array();
            foreach($result as $row){
                //print_r($row);
                //echo $row['roomID'];
                $tempItem=new Sundries($row['roomID'],$row[2],$row['length'],$row['price']);
                array_push($itemValue,$tempItem);
            }
        }
        return $itemValue;
    }
}
?>
