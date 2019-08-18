<?php
require('vendor/autoload.php');

class TestProduct implements Product
{
    public function getProperties(){
        $content=new IndexWidget;
        $decorator=new HeadDecorator($content);

        return $decorator->draw();
    }
}
class OrderListProduct implements Product
{
    public function getProperties(){
        $content=new OrderListWidget;
        $decorator=new HeadDecorator($content);

        return $decorator->draw();
    }
}
class OrderProduct implements Product
{
    public function getProperties(){
        $content=new OrderWidget;
        $decorator=new HeadDecorator($content);

        return $decorator->draw();
    }
}
class HydroelectricProduct implements Product
{
    public function getProperties(){
        $content=new HydroelectricWidget;
        $decorator=new HeadDecorator($content);

        return $decorator->draw();
    }
}
?>
