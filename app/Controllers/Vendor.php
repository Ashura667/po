<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VendorModel;
class Vendor extends BaseController
{

    protected $vendor;

    public function __construct(){
        $this->vendor = new VendorModel();
    }
    public function index()
    {
        // $data ['perusahaan'] = $this->perusahaan->findAll();
        // $data ['title'] = "Perusahaan";
        $data = [
            'vendor' => $this->vendor->findAll(),
            'title' => "Vendor"
        ];
        // dd($data);
        return view('1vendor/vendor', $data);
        
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
