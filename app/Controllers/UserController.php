<?php
/* nama 'file' dan nama 'class' harus sama agar CodeIgniter dapat mengenalinya dengan benar */

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    // properti userModel 
    protected $userModel;

    // method __construct yang otomatis dijalankan
    public function __construct()
    {
        // membuat object UserModel dan menyimpannya pada $this->userModel agar bisa digunakan pada semua method yang ada di class ini
        $this->userModel = new UserModel();
    }

    // method index untuk menampilkan data barang
    public function index()
    {
        // return view("user/index");
        $data['user'] = $this->userModel->findAll();
        return view('user/index', $data);
    }

    // public function create()
    // {
    //     $this->userModel->save([
    //         'name' => $this->request->getPost('name'),
    //         'username' => $this->request->getPost('username'),
    //         'password' => $this->request->getPost('password'),
    //         'email' => $this->request->getPost('email'),
    //         'role' => $this->request->getPost('role'),
    //     ]);
    //     return redirect()->to("/user");
    // }

    // public function create()
    // {
    //     $this->barangModel->save([
    //         'nama' => $this->request->getPost('nama'),
    //         'harga' => $this->request->getPost('harga'),
    //         'stok' => $this->request->getPost('stok'),
    //     ]);
    //     return redirect()->to('/barang');
    // }
}
