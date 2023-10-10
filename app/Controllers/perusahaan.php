<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PerusahaanModel;
class Perusahaan extends BaseController
{

    protected $perusahaan;

    public function __construct(){
        $this->perusahaan = new PerusahaanModel();
    }
    public function index()
    {
        $data ['perusahaan'] = $this->perusahaan->findAll();
        $data ['title'] = "Perusahaan";
        // dd($data);
        return view('perusahaan', $data);
        
    } 
     public function tambah()
    {
        //
    }
    public function ubah()
    {
        //
    }
    public function hapus()
    {
        //
    }
}
