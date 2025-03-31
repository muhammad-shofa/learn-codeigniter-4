<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('index');
    }



    public function getUser()
    {
        $dataUsers = $this->userModel->findAll();
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $dataUsers
        ]);
    }
}
