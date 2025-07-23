<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // nama tabel database
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
}
