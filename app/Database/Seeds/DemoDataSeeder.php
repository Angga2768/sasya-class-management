<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\\Database\\Seeds\\AdminSeeder');

        $this->db->table('schedules')->insert([
            [
                'course_name' => 'Pemrograman Web Lanjut',
                'lecturer_name' => 'Bapak Fajar',
                'day_of_week' => 'Senin',
                'start_time' => '08:00:00',
                'end_time' => '10:00:00',
                'room_name' => 'Lab 1',
                'start_date' => '2026-10-12',
                'end_date' => '2026-12-31',
                'is_published' => 1,
                'notes' => 'Jadwal awal semester ganjil.',
                'created_by' => 1,
            ],
        ]);

        $this->db->table('announcements')->insert([
            [
                'title' => 'Pendaftaran Semester Baru',
                'content' => 'Pendaftaran administrasi semester baru dibuka sampai tanggal 20 Oktober 2026.',
                'status' => 'published',
                'published_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
            ],
        ]);
    }
}
