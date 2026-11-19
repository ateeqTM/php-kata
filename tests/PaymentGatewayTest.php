<?php

declare(strict_types=1);

namespace Ateeq\PhpKata\Tests;

use Ateeq\PhpKata\PayPalGateway;
use Ateeq\PhpKata\PaymentGateway;
use Ateeq\PhpKata\StripeGateway;
use PHPUnit\Framework\TestCase;

class PaymentGatewayTest extends TestCase
{
    public function testStripeGatewayPays(): void
    {
        $result = $this->checkout(new StripeGateway(), 10.5);

        $this->assertSame('Paid 10.50 with Stripe', $result);
    }

    public function testPayPalGatewayPays(): void
    {
        $result = $this->checkout(new PayPalGateway(), 10.5);

        $this->assertSame('Paid 10.50 with PayPal', $result);
    }

    private function checkout(PaymentGateway $gateway, float $amount): string
    {
        return $gateway->pay($amount);
    }
}
