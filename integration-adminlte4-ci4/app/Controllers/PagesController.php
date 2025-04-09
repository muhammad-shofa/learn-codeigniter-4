<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function dashboard()
    {
        $data = ["title" => "Dashboard"];

        return view('pages/dashboard', $data);
        // return view('pages/dashboard');
    }

    // public function 
}
