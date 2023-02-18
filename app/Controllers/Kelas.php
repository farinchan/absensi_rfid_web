<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class Kelas extends BaseController
{

    protected $Kelas;
    public function __construct()
    {
        $this->Kelas = new KelasModel();
    }
    public function index()
    {
        $Kelas = $this->Kelas->findAll();
        $data = [
            "active" => "kelas",
            "kelas" => $Kelas
        ];
        return view("kelas", $data);
    }
}
