<?php

declare(strict_types=1);

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\NotFoundException;
use Ateeq\PhpKata\Shop\Cart;
use Ateeq\PhpKata\SimpleContainer;
use PHPUnit\Framework\TestCase;

class SimpleContainerTest extends TestCase
{
    public function testGetReturnsTheSameInstanceTwice(): void
    {
        $container = new SimpleContainer();
        $container->set('cart', fn () => new Cart());

        $first = $container->get('cart');
        $second = $container->get('cart');

        $this->assertSame($first, $second);
    }

    public function testHasReportsWhatIsRegistered(): void
    {
        $container = new SimpleContainer();
        $container->set('cart', fn () => new Cart());

        $this->assertTrue($container->has('cart'));
        $this->assertFalse($container->has('missing'));
    }

    public function testGetThrowsWhenServiceIsMissing(): void
    {
        $container = new SimpleContainer();

        $this->expectException(NotFoundException::class);

        $container->get('missing');
    }
}
