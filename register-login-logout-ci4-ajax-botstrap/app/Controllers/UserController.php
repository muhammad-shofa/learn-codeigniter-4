<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    // tampilkan halaman index
    public function index()
    {
        $session = session();
        $data['loggedUser'] = [
            'name' => $session->get('name'),
            'username' => $session->get('username'),
            'email' => $session->get('email'),
            'role' => $session->get('role'),
            'is_login' => $session->get('is_login'),
            'login_at' => $session->get('login_at'),
            'expired_in' => date('Y-m-d H:i:s', $session->get('expired_in')),
        ];

        return view('user/index', $data);
    }

    // tampilkan halaman login
    public function loginPage()
    {
        return view('user/login');
    }

    // tampilkan halaman register
    public function registerPage()
    {
        return view('user/register');
    }

    // tangani login user
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->usersModel->where('username', $username)->first();

        // cek apakah username ditemukan atau tidak
        if (!$user) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Incorrect username or password']);
        }

        // verifykasi dengan password dari database
        if (!password_verify($password, $user['password'])) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Incorrect username or password']);
        }

        // Waktu expired 
        $expired_time = time() + (2 * 60 * 60); // 2 jam dalam detik

        session()->set([
            'user_id' => $user['user_id'],
            'name' => $user['name'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
            'login_at' => date('Y-m-d H:i:s'),
            'expired_in' => $expired_time,
            'is_login' => true,
        ]);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Login success']);
    }

    // 
    public function register()
    {
        $data = $this->request->getPost();

        $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['password'] = $hashed_password;

        $this->usersModel->save($data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Register success']);
    }

    // tangani logout
    public function logout()
    {
        $session = session();
        $session->destroy();

        // return view('user/index');
        return redirect()->to('/');
    }
}
