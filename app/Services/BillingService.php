<?php

namespace App\Services;

class BillingService
{
    public function createBillingForStudent(int $userId, int $periodId, int $amount): array
    {
        return [
            'user_id' => $userId,
            'billing_period_id' => $periodId,
            'amount' => $amount,
            'paid_amount' => 0,
            'remaining_amount' => $amount,
            'status' => 'unpaid',
        ];
    }

    public function statusFromPaidAmount(int $amount, int $paid): string
    {
        if ($paid <= 0) return 'unpaid';
        if ($paid >= $amount) return 'paid';
        return 'partial';
    }
}
