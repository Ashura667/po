<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(is_null(session()->get("isLogin"))){
            return redirect()->to(base_url('authentication'));
        }
        return view('layout');
    }

}
