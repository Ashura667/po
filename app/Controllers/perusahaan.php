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
        // $data ['perusahaan'] = $this->perusahaan->findAll();
        // $data ['title'] = "Perusahaan";
        $data = [
            'perusahaan' => $this->perusahaan->findAll(),
            'title' => "Perusahaan"
        ];
        // dd($data);
        return view('perusahaan/perusahaan', $data);
        
    } 
    }
