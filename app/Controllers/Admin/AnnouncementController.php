<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'announcements' => [],
        ];

        return view('admin/announcements/index', $data);
    }
}
