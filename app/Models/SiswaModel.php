<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey       = 'tag';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['tag', 'siswa_nama', 'siswa_nis', 'kelas_id'];
}
