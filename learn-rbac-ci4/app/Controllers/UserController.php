<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // - AUTH -
    public function login()
    {
        $loginUsnEmail = $this->request->getPost("usnEmail");
        $loginPassword = $this->request->getPost("password");

        // cari apakah ada username atau email yang sesuai
        $user =  $this->userModel->where("username", $loginUsnEmail)->orWhere("email", $loginUsnEmail)->first();

        if ($user && password_verify($loginPassword, $user['password'])) {

            session()->set([
                'is_login' => true,
                'user_id' => $user['user_id'],
                'name' => $user['name'],
                'role' => $user['role'],
            ]);

            return $this->response->setJSON(['success' => true, 'message' => 'Login Successfull']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Login Failed']);
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Username or password invalid']);
    }
}
