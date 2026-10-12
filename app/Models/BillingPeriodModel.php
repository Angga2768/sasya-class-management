<?php

namespace App\Models;

use CodeIgniter\Model;

class BillingPeriodModel extends Model
{
    protected $table = 'billing_periods';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'start_date', 'end_date', 'standard_amount', 'status', 'notes', 'created_by'];
}
