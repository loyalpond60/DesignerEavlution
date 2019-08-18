<?php
abstract class Factory
{
    protected $msg;

    protected abstract function factoryMethod(Product $product);
    public function startFactory(Product $product){
        $this->msg=$this->factoryMethod($product);
        return $this->msg;
    }
}
?>
