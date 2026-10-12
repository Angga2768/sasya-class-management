<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class BillingController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        $data = [
            'title' => 'Tagihan Saya',
            'user' => $user,
            'bills' => [],
        ];

        return view('student/billing/index', $data);
    }
}
