<?php

namespace App\Models;

use CodeIgniter\Model;

class Mitra extends Model
{
    protected $table      = 'mitra';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'logo', 'alamat', 'kontak', 'lokasi'];
}