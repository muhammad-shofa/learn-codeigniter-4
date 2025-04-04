<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primarykey = "user_id";
    protected $allowedFields = [
        'user_id',
        'name',
        'username',
        'password',
        'email',
        'role'
    ];
}
