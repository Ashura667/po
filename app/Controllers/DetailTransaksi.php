<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailTransaksiModel;

class DetailTransaksi extends BaseController{
protected $detailtransaksi;
public function __construct() {
    $this->detailtransaksi = new DetailTransaksiModel();
}
public function index()
    {
    $data = [
        'detailtransaksi' => $this->detailtransaksi->findAll(),
        'title' => "DetailTransaksi"
    ];
    // dd($data);
    return view('1detailtransaksi/detailtransaksi', $data);
    
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
