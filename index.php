<?php   

require_once __DIR__ . "/Classes/MarketStall.php";
require_once __DIR__ . "/Classes/Cart.php";

use \Product\Product;
use \MarketStall\MarketStall;
use \Cart\Cart;

$orange = new Product("Orange", 35, true);
$potato = new Product("Potato", 250, false);
$nuts = new Product("Nuts", 850, true);
$kiwi = new Product("Kiwi", 670, false);
$pepper = new Product("Pepper", 330, true);
$raspbery = new Product("Raspberry", 555, false);

// Create two different shops
$market1 = new MarketStall([$orange, $potato, $nuts]);
$market2 = new MarketStall([$kiwi, $pepper, $raspbery]);

// Create cart object
$cart = new Cart();
$cart->addToCart($market1->getItem($orange, 3));
$cart->addToCart($market1->getItem($potato, 2));
$cart->addToCart($market1->getItem($nuts, 6));

// Uncomment line 29, 30 and 31 to add products into cart. Otherwise it will print "Your cart is empty"
$cart1 = new Cart();
// $cart1->addToCart($market2->getItem($kiwi, 12));
// $cart1->addToCart($market2->getItem($pepper, 8));
// $cart1->addToCart($market2->getItem($raspbery, 124));

echo "MarketStall one cart status: <br/>"; echo $cart->printReceipt();
echo "<hr/>";
echo "MarketStall two cart status: <br/>"; echo $cart1->printReceipt();