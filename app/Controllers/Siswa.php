<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $Siswa;
    public function __construct()
    {
        $this->Siswa = new SiswaModel();
    }
    public function index()
    {
        $Siswa = $this->Siswa->findAll();
        $data = [
            "active" => "siswa",
            "siswa" => $Siswa
        ];
        return view("siswa", $data);
    }
}
