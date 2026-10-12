<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class ScheduleController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal Kuliah',
            'schedules' => [],
        ];

        return view('student/schedules/index', $data);
    }
}
