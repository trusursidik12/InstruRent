<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class mProducts extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useTimestamps = true;
}
