<?php

namespace App\Models;

use CodeIgniter\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'kelas_nama'];
}
