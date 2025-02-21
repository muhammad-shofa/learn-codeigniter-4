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
        return view('user/index');
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

    
}
