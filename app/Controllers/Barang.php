<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class Barang extends BaseController
{

    protected $barang;
    public function __construct() {
        $this->barang = new BarangModel();
    }
    public function index()
        {
        $data = [
            'barang' => $this->barang->findAll(),
            'title' => "Barang"
        ];
        // dd($data);
        return view('1barang/barang', $data);
        
    }
    public function tambah()
    {
        //
    } public function ubah()
    {
        //
    } public function hapus()
    {
        //
    }
}
