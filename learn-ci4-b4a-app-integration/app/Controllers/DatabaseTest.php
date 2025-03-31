<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class DatabaseTest extends Controller
{
    public function index()
    {
        $db = Database::connect();
        if ($db->connect()) {
            echo "Koneksi database berhasil!";
        } else {
            echo "Koneksi database gagal!";
        }
    }
}