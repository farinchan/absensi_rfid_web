<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'absensi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'tag_id', 'scan_time'];
}
