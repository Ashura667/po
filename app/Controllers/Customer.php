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
    return view('1customer/customer', $data);
    
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
