<?php

namespace App\Models;

use CodeIgniter\Model;

class BillModel extends Model
{
    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'billing_period_id', 'amount', 'paid_amount', 'remaining_amount', 'status', 'due_date', 'notes'];
}
