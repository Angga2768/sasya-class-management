<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'SASYA Class Management System',
            'announcement' => [
                'title' => 'Selamat datang di SASYA',
                'content' => 'Website manajemen kelas untuk mengelola kas, jadwal, pengumuman, dan laporan keuangan mahasiswa.'
            ],
            'schedules' => [
                [
                    'course_name' => 'Pemrograman Web Lanjut',
                    'lecturer_name' => 'Bapak Fajar',
                    'day_of_week' => 'Senin',
                    'start_time' => '08:00',
                    'end_time' => '10:00',
                    'room_name' => 'Lab 1',
                ],
            ],
        ];

        return view('public/home', $data);
    }
}
