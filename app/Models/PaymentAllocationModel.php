<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentAllocationModel extends Model
{
    protected $table = 'payment_allocations';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['payment_transaction_id', 'bill_id', 'amount', 'allocated_at'];
}
