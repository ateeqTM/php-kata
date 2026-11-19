<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function formatPrice(float $price): string
    {
        return '£' . number_format($price, 2);
    }
}
