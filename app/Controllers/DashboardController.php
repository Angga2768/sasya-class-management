<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        $user = session()->get('user');

        if (! $user) {
            return redirect()->to('/login');
        }

        if ($user['role'] === 'admin') {
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->to('/student/dashboard');
    }
}
