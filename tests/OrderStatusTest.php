<?php

declare(strict_types=1);

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\OrderStatus;
use PHPUnit\Framework\TestCase;
use ValueError;

class OrderStatusTest extends TestCase
{
    public function testLabelDescribesEachStatus(): void
    {
        $this->assertSame('Waiting for payment', OrderStatus::Pending->label());
        $this->assertSame('On its way', OrderStatus::Shipped->label());
    }

    public function testCanCancelOnlyBeforeShipping(): void
    {
        $this->assertTrue(OrderStatus::Pending->canCancel());
        $this->assertTrue(OrderStatus::Paid->canCancel());
        $this->assertFalse(OrderStatus::Shipped->canCancel());
        $this->assertFalse(OrderStatus::Cancelled->canCancel());
    }

    public function testFromFindsTheCaseByValue(): void
    {
        $this->assertSame(OrderStatus::Paid, OrderStatus::from('paid'));
    }

    public function testFromThrowsForUnknownValue(): void
    {
        $this->expectException(ValueError::class);

        OrderStatus::from('nonsense');
    }

    public function testTryFromReturnsNullForUnknownValue(): void
    {
        // @phpstan-ignore method.alreadyNarrowedType
        $this->assertNull(OrderStatus::tryFrom('nonsense'));
    }
}
