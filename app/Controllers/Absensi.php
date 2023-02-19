<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Models\AbsensiModel;
use App\Models\LogsModel;

class Absensi extends BaseController
{
    use ResponseTrait;
    protected $Absensi, $Log;
    public function __construct()
    {
        $this->Absensi = new AbsensiModel();
        $this->Log = new LogsModel();
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
        $this->Absensi->save([
            'tag_id' => slugify($this->request->getVar('tag')),
        ]);
        return $this->respond(["message" => "Success"], 200);
    }
    public function test()
    {

        $this->Log->save([
            'tag_id' => slugify($this->request->getVar('tag')),
        ]);
        return $this->respond(["message" => "Success"], 200);
    }
}

function slugify($text, string $divider = '')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, $divider);
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
    // lowercase
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
