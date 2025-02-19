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

    // method index untuk menampilkan semua data user
    public function index()
    {
        // return view("user/index");
        $data['user'] = $this->userModel->findAll();
        return view('user/index', $data);
    }

    // method mengalihkan dan menampilkan form inputan create user
    public function showCreate()
    {
        return view('/user/create'); // tampilkan halaman create pada folder Views/create
    }

    // method simpan pembuatan user
    public function saveCreate()
    {
        // Validasi input
        if (!$this->validate([
            'name' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'role'    => 'required',
        ])) {
            return redirect()->to('/user/show-create')->withInput()->with('validation', \Config\Services::validation()); // pesan error masih belum muncul ketika tidak sesuai dengan validasi

            // ->with('validation', \Config\Services::validation());
        }

        // simpan ke database
        $this->userModel->save([
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ]);

        // redirect ke halaman user dengan pesan "New user added"
        return redirect()->to('/user')->with("success", "New user added");
    }

    // method untuk mengambild data user tertentu dan akan ditampilkan ke halaman form edit
    public function edit($user_id = 0)
    {
        $data = $this->userModel->find($user_id);

        if (!$data) {
            return redirect()->to('/user')->with('error', 'User not found');
        }

        return view('user/edit', ['data' => $data]);
    }

    // method untuk mengambil data yang sudah diedit oleh user tertentu dari form edit
    public function update($user_id = 0)
    {
        $newData = $this->request->getPost();

        $this->userModel->update($user_id, $newData);

        // return redirect()->to('/user')->with('success', "User edited : $newData");
        return redirect()->to('/user')->with('success', "User edited");
    }

    // method delete user
    public function delete($user_id = 0)
    {
        $result = $this->userModel->delete($user_id); // delete() mengembalikan boolean true or false
        if ($result) {
            return redirect()->to('/user')->with('success', 'User deleted');
        }
        return redirect()->to('/user')->with('failed', 'Failed to delete user! try again.');
    }

    /* noted noted noted noted noted noted noted noted noted noted */
    /* noted noted noted noted noted noted noted noted noted noted */
    /* noted noted noted noted noted noted noted noted noted noted */
    // ambil data pertama dari database
    public function searchFirst()
    {
        $data = $this->userModel->first();
        return print_r($data);
    }

    // ambil data berdasarkan id
    public function searchSpecified($user_id = 0)
    {
        $data = $this->userModel->find($user_id);
        return print_r($data);
    }

    // macam - macam method get request CI4
    // $this->request->getPost('key') //	Ambil 1 data dari POST
    // $this->request->getPost() //	Ambil semua data POST dan simpan ke dalam array |  output array
    // $this->request->getVar('key') //	Ambil dari GET atau POST (otomatis)
    // $this->request->getGet('key') //	Ambil data dari GET
    // $this->request->getRawInput() //	Ambil JSON atau raw data dari frontend
}
