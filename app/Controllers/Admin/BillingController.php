<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BillingController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kas Kelas',
            'periods' => [],
            'transactions' => [],
        ];

        return view('admin/billing/index', $data);
    }
}
