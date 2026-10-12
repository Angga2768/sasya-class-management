<?php

namespace App\Services;

class PaymentGatewayService
{
    public function generateInvoiceCode(): string
    {
        return 'SASYA-' . date('YmdHis') . '-' . random_int(1000, 9999);
    }

    public function isSandbox(): bool
    {
        return env('payment.qris.mode', 'sandbox') === 'sandbox';
    }
}
