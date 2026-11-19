<?php

declare(strict_types=1);

namespace Ateeq\PhpKata;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Shipped = 'shipped';
    case Cancelled = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Waiting for payment',
            self::Paid => 'Payment received',
            self::Shipped => 'On its way',
            self::Cancelled => 'Cancelled',
        };
    }

    public function canCancel(): bool
    {
        return match ($this) {
            self::Pending, self::Paid => true,
            self::Shipped, self::Cancelled => false,
        };
    }
}
