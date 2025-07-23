<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

 public function auth()
{
    $session = session();
    $model = new \App\Models\UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password'); // ← ini harus dari input user

    $user = $model->where('username', $username)->first();
    

    if ($user && password_verify($password, $user['password'])) {
        $session->set([
            'username' => $user['username'],
            'logged_in' => true,
        ]);
        return redirect()->to('/admin');
    } else {
        return redirect()->to('/login')->with('error', 'Username atau password salah');
    }
}

}
