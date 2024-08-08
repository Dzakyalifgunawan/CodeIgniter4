<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
use CodeIgniter\HTTP\ResponseInterface;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Data Komik',
            'komik' => $komik
        ];

        // Cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }

        return view('komik/index', $data);
    }
}