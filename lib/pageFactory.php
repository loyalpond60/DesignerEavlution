<?php
require('vendor/autoload.php');

class PageFactory extends Factory
{
    private $product;
    protected function factoryMethod(Product $product){
        $this->product=$product;
        return $this->product->getProperties();
    }
}
?>
