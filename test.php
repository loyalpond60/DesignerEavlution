<?php
class Sundries
{
    public $name;
    public $length;

    public function __construct($name,$length){
        $this->name=$name;
        $this->length=$length;
    }
    public function getName(){
        return $this->name;
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

    public $width;

    public function __construct($name,$length,$width)
    {
        $this->name=$name;
        $this->length=$length;
        $this->width=$width;
    }

    public function getWidth(){
        return $this->width;
    }
}
$item=new Ceiling("test",100,90);
echo $item->getName();
echo $item->getLength();
echo $item->getWidth();

?>
