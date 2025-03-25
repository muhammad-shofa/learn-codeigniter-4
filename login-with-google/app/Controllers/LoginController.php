<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Google_Client;

class LoginController extends BaseController
{
    protected $googleClient;

    public function __construct()
    {
        $this->googleClient = new Google_Client();

        // set client id & client secret
        $this->googleClient->setClientId('89900455845-9ku83g6h9qvdvlnn8488v7te0eorv5kq.apps.googleusercontent.com');
        $this->googleClient->setClientSecret('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');
        $this->googleClient->setRedirectUri('http://localhost:8080/login/process');
        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');
    }

    public function index()
    {
        $data['link'] = $this->googleClient->createAuthUrl();

        return view('login/index', $data);
    }

    public function process()
    {
        // ambil token dari client
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
    }
}
