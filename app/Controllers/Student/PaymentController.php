<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class PaymentController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'transactions' => [],
        ];

        return view('student/payments/history', $data);
    }
}
