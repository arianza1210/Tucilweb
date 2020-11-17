<?php

namespace App\Models;

use CodeIgniter\CodeIgniter;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
}
