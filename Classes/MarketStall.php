<?php 

namespace MarketStall;

require_once __DIR__ . "/Product.php";

use \Product\Product;

class MarketStall 
{
    public $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * Add appended object to products array
     */
    public function addProductToMarket(Product $product)
    {
        array_push($this->products, [$product->getName() => $product]);
    }

    /**
     * Check products array if the name exists as a key
     * 
     * @return array/bool
     */
    public function getItem(object $name, int $amount)
    {
        if (in_array($name, $this->products)) {
            return ['amount' => $amount, 'item' => $name];
        } else {
            return false;
        }
    }

}