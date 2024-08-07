<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Coba extends BaseController
{
    public function index($nama = "", $contoh = 0)
    {
        echo " Coba Dahulu $nama, dong $contoh ";
    }
}
