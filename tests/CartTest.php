<?php

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\Shop\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testHelloReturnsShopCart(): void
    {
        $cart = new Cart();

        $this->assertSame("Shop cart", $cart->hello());
    }
}
