<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function login()
    {
        return view("pages/auth/login");
    }

    public function home()
    {
        $role = session()->get('role');
        $data = [
            'role' => $role
        ];
        return view("pages/home", $data);
    }

    public function userManagement()
    {
        $role = session()->get('role');
        $data = [
            'role' => $role
        ];
        return view("pages/user-management", $data);
    }

    public function createTransaction()
    {
        $role = session()->get('role');
        $data = [
            'role' => $role
        ];
        return view("pages/create-transaction", $data);
    }
}
