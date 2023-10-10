<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perusahaan';
    protected $primaryKey       = 'perusahaan_id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = 
    ['nama_perusahaan','alamat_perusahaan','nomor_telepon_perusahaan',
        'email_perusahaan','website_perusahaan','catatan'];

}
