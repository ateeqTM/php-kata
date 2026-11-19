<?php

// Load Composer's autoloader once, so classes in src/ are found by PSR-4
require __DIR__ . '/vendor/autoload.php';

use Ateeq\PhpKata\Shop\Cart;
use Ateeq\PhpKata\Blog\Cart as BlogCart;   // "as" gives the second Cart a nickname

// PSR-1 rule 3: this file only DOES things (output). It declares no classes.
$shop = new Cart();
$blog = new BlogCart();

echo $shop->hello() . "\n";
echo $blog->hello() . "\n";
