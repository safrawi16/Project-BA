<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function save()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $userModel->insert([
            'username' => $username,
            'password' => $password,
        ]);

        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat');
    }
}
