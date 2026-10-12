<?php

namespace App\Services;

class PaymentService
{
    public function validatePaymentAmount(int $amount, int $remaining): bool
    {
        return $amount > 0 && $amount <= $remaining;
    }

    public function calculateRemaining(int $total, int $paid): int
    {
        return max(0, $total - $paid);
    }
}
