<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'subtitle' => 'SASYA Class Management System',
        ];

        return view('admin/dashboard', $data);
    }
}
