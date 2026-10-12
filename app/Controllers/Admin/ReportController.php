<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan keuangan',
            'report' => [],
        ];

        return view('admin/reports/index', $data);
    }
}
