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

        try {

            $response = $client->get("https://komiku-api.fly.dev/api/comic/list", ['timeout' => 60]);

            $statusCode = $response->getStatusCode();

            if ($statusCode == 200) {
                $data["comic"] = json_decode($response->getBody(), true);
                return $this->response->setJSON($data['comic']);
            } else {
                return $this->response->setJSON(['status' => "error", 'message' => "Failed to get data from API" . $statusCode])->setStatusCode(500);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => "error", 'message' => $e->getMessage()])->setStatusCode(500);
        }
    }
}