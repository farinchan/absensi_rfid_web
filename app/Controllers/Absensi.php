<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Models\AbsensiModel;

class Absensi extends BaseController
{
    use ResponseTrait;
    protected $Absensi;
    public function __construct()
    {
        $this->Absensi = new AbsensiModel();
    }

    public function index()
    {
        $Absensi = $this->Absensi->findAll();
        $data = [
            "active" => "Absensi",
            "absensi" => $Absensi
        ];
        return view("v_absensi", $data);
    }
    public function scan()
    {
        $tag = preg_replace('/\s+/', '', $this->request->getVar('tag'));
        $this->Absensi->save([
            'tag_id' => $tag,
        ]);
        return $this->respond(["message" => "Success"], 200);
    }
}
