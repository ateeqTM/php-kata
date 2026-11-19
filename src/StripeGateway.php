<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

class StripeGateway implements PaymentGateway
{
    public function pay(float $amount): string
    {
        return 'Paid ' . number_format($amount, 2) . ' with Stripe';
    }
}
