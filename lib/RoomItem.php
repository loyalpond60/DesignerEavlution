<?php
/**
 *  訂定item interface
 *  Sundries雜物
 *  ceiling,floor訂定天花板地板
 *  extends增加其他項
*/
interface IItem
{
    //private $name;
    //private $length;
    public function getName();
    public function getRoomNum();
    public function getLength();
}
/**
 *
 *雜物項，窗簾盒、冷氣架等...
 *
 */
class Sundries implements IItem
{
    protected $name;
    protected $roomNum;
    protected $length;
    protected $price;

    public function __construct($roomNum,$name,$length,$price){
        $this->roomNum=$roomNum;
        $this->name=$name;
        $this->length=$length;
        $this->price=$price;
        //echo "roomNum".$this->roomNum."<br>";
    }
    public function getName(){
        return $this->name;
    }
    public function getRoomNum(){
        return $this->roomNum;
    }
    public function getLength(){
        return $this->length;
    }
    public function getPrice(){
        return $this->price;
    }
}
/**
 * 天花板
 */
class Ceiling extends Sundries
{
    protected $width;

    function __construct($roomNum,$length,$width)
    {
        $this->name="Ceiling";
        $this->roomNum=$roomNum;
        $this->length=$length;
        $this->width=$width;
    }
    public function getWidth(){
        return $this->width;
    }
}

class Floor extends Sundries
{
    protected $width;

    function __construct($roomNum,$length,$width)
    {
        $this->name="Floor";
        $this->roomNum=$roomNum;
        $this->length=$length;
        $this->width=$width;
    }
    public function getWidth(){
        return $this->width;
    }
}
 ?>
