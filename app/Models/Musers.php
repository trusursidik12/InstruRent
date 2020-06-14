<?php

namespace App\Models;

use CodeIgniter\Model;

class mUsers extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'a_users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['email', 'password', 'name'];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function register($data)
    {
        return false;
    }
}
