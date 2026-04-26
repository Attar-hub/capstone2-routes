<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('v_login');
    }

    public function process()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == '123') {
            $session->set('username', $username);
            return redirect()->to('/home');
        } else {
            $session->setFlashdata('error', 'Username & Password Salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}