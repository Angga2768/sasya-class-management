<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
        $user = session()->get('user');

        return view('profile/index', ['user' => $user]);
    }

    public function passwordForm()
    {
        return view('profile/password');
    }

    public function updatePassword()
    {
        $password = $this->request->getPost('password');
        $confirm = $this->request->getPost('confirm_password');

        if (empty($password) || $password !== $confirm) {
            return redirect()->back()->with('error', 'Password tidak valid atau konfirmasi tidak cocok.');
        }

        $userId = session()->get('user_id');
        $userModel = new \App\Models\UserModel();
        $userModel->update($userId, ['password_hash' => $password]);

        return redirect()->to('/profile')->with('success', 'Password berhasil diperbarui.');
    }
}
