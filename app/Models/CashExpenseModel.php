<?php

namespace App\Models;

use CodeIgniter\Model;

class CashExpenseModel extends Model
{
    protected $table = 'cash_expenses';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'description', 'amount', 'expense_date', 'category', 'created_by', 'approved_by'];
}
