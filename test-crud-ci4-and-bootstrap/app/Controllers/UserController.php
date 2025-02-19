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

    public function index()
    {
        $user = $this->usersModel->findAll();

        return view("user/index", ['user' => $user]);
    }

    public function create()
    {
        
    }
}
