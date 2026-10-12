<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'announcements' => [],
        ];

        return view('student/announcements/index', $data);
    }
}
