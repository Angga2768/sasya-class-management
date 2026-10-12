<?php

namespace App\Services;

class QrisGatewayAdapter implements PaymentGatewayInterface
{
    public function createInvoice(array $payload): array
    {
        return [
            'invoice_code' => $payload['invoice_code'] ?? 'INV-' . time(),
            'status' => 'pending',
            'qr_code' => 'https://example.com/qris/demo',
            'expires_at' => date('Y-m-d H:i:s', strtotime('+1 hour')),
            'provider' => 'sandbox',
        ];
    }

    public function verifyWebhook(array $payload, string $signature): bool
    {
        $expected = env('payment.qris.webhook_secret', 'demo_webhook_secret');
        return hash_hmac('sha256', json_encode($payload), $expected) === $signature;
    }
}
