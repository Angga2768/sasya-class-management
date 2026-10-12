<?php

namespace App\Services;

interface PaymentGatewayInterface
{
    public function createInvoice(array $payload): array;
    public function verifyWebhook(array $payload, string $signature): bool;
}
