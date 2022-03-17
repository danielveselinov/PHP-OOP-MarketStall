<?php 

namespace Cart;

require_once __DIR__ . "/MarketStall.php";
class Cart
{
    private $cartItems = []; 

    /**
     * Add items to cartItems array
     */
    public function addToCart($product)
    {
        array_push($this->cartItems, $product);
    }

    /**
     * Print products with it's data
     */
    public function printReceipt()
    {
        if ($this->isEmptyCart()) {
            $sum = 0;

            foreach ($this->cartItems as $cartItem) {
                $amount = $cartItem["amount"];
                $itemName = $cartItem["item"]->getName();
                $itemPrice = $cartItem["item"]->getPrice();
                $itemUnut = $cartItem["item"]->getSellingByKg() ? "{$amount} gunny sacks" : "{$amount} kgs";

                echo "{$itemName} | {$itemUnut} | total = {$itemPrice} denars<br/>";

                $sum += $itemPrice;
            }
            echo "<br/>Final price amount: {$sum}";

        } else {
            return "Your cart is empty";
        }
    }

    /**
     * Check if cart is empty
     * 
     * @return bool
     */
    public function isEmptyCart()
    {
        if (count($this->cartItems) > 0) {
            return true;
        } else {
            return false;
        }
    }
}