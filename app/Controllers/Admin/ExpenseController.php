<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ExpenseController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengeluaran Kas',
            'expenses' => [],
        ];

        return view('admin/expenses/index', $data);
    }
}
