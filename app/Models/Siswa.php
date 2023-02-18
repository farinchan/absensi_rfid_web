<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    protected $table = 'device';
    protected $primaryKey       = 'tag';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['tag', 'siswa_nama', 'siswa_nis', 'kelas_id'];
}
