<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        return view('student/profile/index', ['user' => $user]);
    }
}
