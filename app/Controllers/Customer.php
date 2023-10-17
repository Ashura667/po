<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customer extends BaseController{
protected $customer;
public function __construct() {
    $this->customer = new CustomerModel();
}
public function index()
    {
    $data = [
        'customer' => $this->customer->findAll(),
        'title' => "Customer"
    ];
    // dd($data);
    return view('customer/customer', $data);
    
}
public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)>0){
            try {
                $this->customer->insert($item);
                return redirect()->to(base_url('customer'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('customer/tambah');
    }  public function ubah()
{
    //
} public function hapus()
{
    //
}
}
