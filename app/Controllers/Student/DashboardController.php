<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');

        $data = [
            'title' => 'Dashboard Mahasiswa',
            'user' => $user,
        ];

        return view('student/dashboard', $data);
    }
}
