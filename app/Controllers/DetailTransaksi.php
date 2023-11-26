<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;

class Detailtransaksi extends BaseController
    { protected $TransaksiModel;
        protected $DetailTransaksiModel;
        public function __construct()
        {
            $this->TransaksiModel = new TransaksiModel();
            $this->DetailTransaksiModel = new DetailTransaksiModel();
        }
    
public function index()
    {
        $idtransaksi = $this->request->getVar("idtransaksi");
        // dd($data);
    return view('transaksi/transaksi', $idtransaksi);
    
}
}
 