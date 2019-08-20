<?php
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

    public function __construct($roomNum,$name,$length){
        $this->$roomNum=$roomNum;
        $this->name=$name;
        $this->length=$length;

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
