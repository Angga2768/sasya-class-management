<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentTransactionModel extends Model
{
    protected $table = 'payment_transactions';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['invoice_code', 'user_id', 'bill_id', 'amount', 'payment_method', 'provider', 'status', 'payment_channel', 'gateway_reference', 'expires_at', 'paid_at', 'webhook_event_id'];
}
