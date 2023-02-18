<?php

namespace App\Models;

use CodeIgniter\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $primaryKey       = 'tag';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id', 'tag_id', 'scan_time'];
}
