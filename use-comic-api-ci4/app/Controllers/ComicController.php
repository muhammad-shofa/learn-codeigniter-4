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

        $data["comic"] = json_decode($response->getBody(), true);

        return $this->response->setJSON($data['comic']);

    }
}
