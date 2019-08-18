<?php
include_once ("pageFactory.php");
include_once ("productOrder.php");

class AdminIndexClient
{
    private $factory;
    public function __construct(){
        $this->factory=new PageFactory;
        echo $this->factory->startFactory(new AdminIndexProduct);
    }
}
 ?>
