<?php

namespace App\Models;

use CodeIgniter\Model;

class Foto extends Model
{
    protected $table      = 'foto';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['image', 'id_banner'];
}