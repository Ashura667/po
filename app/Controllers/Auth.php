<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $user;
    public function __construct() {
        $this->user = new UserModel();
    }
    public function index()
    {
        $numRow = $this->user->countAllResults();
        if($numRow==0)
            $this->user->insert(['username'=>'admin', 'password'=>password_hash('admin', PASSWORD_DEFAULT), 'akses'=>'Admin']);
        return view('auth');
    }

    function login() {
        $param = $this->request->getPost();
        $user = $this->user->where('username', $param['username'])->first();
    
        if ($user) {
            if (password_verify($param['password'], $user['password'])) {
                if ($user['akses'] == 'Admin') {
                    $itemSession = [
                        'uid' => $user['id'],
                        'nama' => 'Admin',
                        'akses' => $user['akses'],
                        'isLogin' => true,
                    ];
                    $session = session();
                    $session->set($itemSession);
                    return redirect()->to(base_url()); 
                } else {
                    $itemSession = [
                        'uid' => $user['id'],
                        'nama' => 'Customer',
                        'akses' => $user['akses'],
                        'isLogin' => true,
                    ];
                    $session = session();
                    $session->set($itemSession);
                }
            } else {
                session()->setFlashdata('error', 'Password tidak sesuai');
                return view('auth');
            }
        } else {
            session()->setFlashdata('error', 'User tidak ditemukan');
            return view('auth');
        }
    }
    

    function logout(){
        session()->destroy();
        return redirect()->to(base_url('authentication'));
    }
}