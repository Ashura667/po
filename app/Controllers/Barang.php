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
        return view('barang/barang', $data);
        
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)>0){
            try {
                $this->barang->insert($item);
                return redirect()->to(base_url('barang'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('barang/tambah');
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
                        "unit"=>$item['unit'],
                        "harga"=>$item['harga'],
                    ];
                    $this->barang->update($id,$value);
                    return redirect()->to(base_url('barang'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->barang->where('idbarang', $id)->first();
            return view('barang/ubah', $item);
        } 
    }
        public function hapus($id)
        {
            $this->barang->delete($id);
            return redirect()->to(base_url("barang"));
        }
}
 