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

    // ambil semua data dari usersModel dan kirimkan ke folder user/index
    public function index()
    {
        // $data['user'] = $this->usersModel->findAll();
        // return view("user/index", $data);
        return view("user/index");
    }

    public function getData()
    {
        $users = $this->usersModel->findAll();

        return $this->response->setJSON($users);
    }

    // simpan data baru yang dikirim dari user
    public function createUser()
    {
        $createDataUser = $this->request->getPost();

        $hashed_password = password_hash($createDataUser['password'], PASSWORD_DEFAULT);

        $createDataUser['password'] = $hashed_password;

        $this->usersModel->save($createDataUser);

        return $this->response->setJSON(['status' => 'success', 'message' => 'New user created']);
    }

    // Ambil data user berdasarkan user_id tertentu lalu tampilkan pada form edit
    public function showDataEdit($user_id = 0)
    {
        $dataUser = $this->usersModel->find($user_id);

        if (!$dataUser) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'User not found']);
        }

        // var_dump($dataUser);
        // mengembalikan data dalam bentuk JSON agar bisa diproses oleh ajax
        return $this->response->setJSON(['status' => 'success', 'data' => $dataUser]);
    }

    // method untuk mengupdate data user berdasarakan user_id tertentu
    public function saveEdit($user_id = 0)
    {
        $editedDataUser = $this->request->getPost();

        $this->usersModel->update($user_id, $editedDataUser);

        return $this->response->setJSON(['status' => 'success']);
    }

    // method untuk menghapus user berdasarakn user_id tertentu
    public function deleteUser($user_id = 0)
    {
        $this->usersModel->delete($user_id);
        return $this->response->setJSON(['status' => 'success', 'message' => 'User deleted']);
    }
}
