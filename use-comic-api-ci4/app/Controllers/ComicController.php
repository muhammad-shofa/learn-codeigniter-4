<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Client;

class ComicController extends BaseController
{


    public function index()
    {
        $client = service("curlrequest");
        $response = $client->get("https://komiku-api.fly.dev/api/comic/list");

        // return $this->$response->getBody();

        // dd($data['comic']);

        // $this->response->setJSON()
        return $this->response->setJSON([
            'status' => 'success',
            'data' => json_decode($response->getBody())
        ]);
    }
}
