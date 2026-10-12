<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Mahasiswa',
            'students' => [],
        ];

        return view('admin/students/index', $data);
    }
}
