<?php

declare(strict_types=1);

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\Calculator;
use PHPUnit\Framework\TestCase;
use TypeError;

class CalculatorTest extends TestCase
{
    public function testAddReturnsSum(): void
    {
        $calculator = new Calculator();

        $this->assertSame(5, $calculator->add(2, 3));
    }

    public function testAddRejectsStringInStrictMode(): void
    {
        $calculator = new Calculator();
        $notAnInt = '2';

        $this->expectException(TypeError::class);

        // @phpstan-ignore argument.type
        $result = $calculator->add($notAnInt, 3);

        $this->assertSame(5, $result);
    }

    public function testFormatPriceShowsTwoDecimals(): void
    {
        $calculator = new Calculator();

        $this->assertSame('£12.50', $calculator->formatPrice(12.5));
    }
}
