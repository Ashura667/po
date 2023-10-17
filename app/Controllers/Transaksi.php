<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
class Transaksi extends BaseController
{

    protected $transaksi;

    public function __construct(){
        $this->transaksi = new TransaksiModel();
    }
    public function index()
    {
        // $data ['perusahaan'] = $this->perusahaan->findAll();
        // $data ['title'] = "Perusahaan";
        $data = [
            'Transaksi' => $this->transaksi->findAll(),
            'title' => "Transaksi"
        ];
        // dd($data);
        return view('transaksi/transaksi', $data);
        
    } 
     public function tambah()
    {
        return view('transaksi/transaksi_tambah');
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
