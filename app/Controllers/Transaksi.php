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
        $item = $this->request->getPost();
        if(count($item)>0){
            try {
                $this->transaksi->insert($item);
                return redirect()->to(base_url('transaksi'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('transaksi/tambah');
    } 
    public function ubah($id=null)
    {
        $item = $this->request->getPost();
        if (isset($item['ubah'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "sub"=>$item['nama'],
                        "unit"=>$item['unit'],
                        "harga"=>$item['harga'],
                    ];
                    $this->transaksi->update($id,$value);
                    return redirect()->to(base_url('transaksi'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->transaksi->where('idtransaksi', $id)->first();
            return view('transaksi/ubah', $item);
        } 
    }
        public function hapus($id)
        {
            $this->transaksi->delete($id);
            return redirect()->to(base_url("transaksi"));
        }
}
