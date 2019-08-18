<?php
require('vendor/autoload.php');

class TestClient
{
    private $factory;
    public function __construct(){
        $this->factory=new PageFactory;
        echo $this->factory->startFactory(new TestProduct);
    }
}
class OrderListClient
{
    private $factory;
    public function __construct(){
        $this->factory=new PageFactory;
        echo $this->factory->startFactory(new OrderListProduct);
    }
}
class OrderClient
{
    private $factory;
    public function __construct(){
        $this->factory=new PageFactory;
        echo $this->factory->startFactory(new OrderProduct);
    }
}
class HydroelectricClient
{
    private $factory;
    public function __construct(){
        $this->factory=new PageFactory;
        echo $this->factory->startFactory(new HydroelectricProduct);
    }
}

?>
