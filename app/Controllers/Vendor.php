<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VendorModel;

class Vendor extends BaseController
{

    protected $vendor;

    public function __construct()
    {
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
        return view('vendor/vendor', $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->vendor->insert($item);
                return redirect()->to(base_url('vendor'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('vendor/tambah');
    }
    public function ubah($id=null)
    {
        $item = $this->request->getPost();
        if (isset($item['ubah'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "nama"=>$item['nama'],
                        "alamat"=>$item['alamat'],
                        "kontak"=>$item['kontak'],
                        "email"=>$item['email'],
                    ];
                    $this->vendor->update($id,$value);
                    return redirect()->to(base_url('vendor'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->vendor->where('idvendor', $id)->first();
            return view('vendor/ubah', $item);
        } 
    }
    public function hapus()
    {
        //
    }
}
