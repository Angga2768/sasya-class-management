<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $adminExists = $userModel->where('username', 'superadmin')->first();
        if ($adminExists) {
            return;
        }

        $userModel->insert([
            'nim' => 'ADM-0001',
            'full_name' => 'Super Admin SASYA',
            'email' => 'admin@sasya.local',
            'username' => 'superadmin',
            'password_hash' => 'Admin!123',
            'role' => 'admin',
            'status' => 'active',
        ]);
    }
}
