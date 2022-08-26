<?php

namespace App\Models;

use CodeIgniter\Model;

class Counter extends Model
{
    protected $table      = 'counter';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['counter'];
}