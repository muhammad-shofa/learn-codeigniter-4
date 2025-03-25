<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Google_Client;

class LoginController extends BaseController
{
    protected $googleClient;
    protected $userModel;

    public function __construct()
    {
        $this->googleClient = new Google_Client();
        $this->userModel = new UserModel();

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

        // debug
        // var_dump($token);
        // dd($token);

        if (!isset($token['error'])) {
            $this->googleClient->setAccessToken($token['access_token']);
            // semua data tadi disimpan pada $googleService
            $googleService = new \Google_Service_Oauth2($this->googleClient);

            // ambil data user yang sudah login
            $data = $googleService->userinfo->get();

            // debug 
            // dd($data);

            $row = [
                'user_id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'profile' => $data['picture']
            ];

            // simpan data ke dalam database
            $this->userModel->save($row);

            // set session berdasarkan data user yang sudah login
            session()->set($row);
            return view('login/success');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
