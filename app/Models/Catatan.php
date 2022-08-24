<?php

namespace App\Models;

use CodeIgniter\Model;

class Catatan extends Model
{
    protected $table      = 'catatan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['catatan', 'id_mitra'];
}