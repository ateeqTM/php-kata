<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

interface PaymentGateway
{
    public function pay(float $amount): string;
}
