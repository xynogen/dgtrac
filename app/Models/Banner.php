<?php

namespace App\Models;

use CodeIgniter\Model;

class Banner extends Model
{
    protected $table      = 'banner';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'description', 'id_mitra', 'harga', 'satuan', 'status', 'type'];
}