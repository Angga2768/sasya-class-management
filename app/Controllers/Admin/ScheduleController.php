<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ScheduleController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal Kuliah',
            'schedules' => [],
        ];

        return view('admin/schedules/index', $data);
    }
}
