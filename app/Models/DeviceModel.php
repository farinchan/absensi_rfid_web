<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
   
    protected $table = 'device';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'device_name', 'kelas_id', 'device_key', 'created_at'];
}
