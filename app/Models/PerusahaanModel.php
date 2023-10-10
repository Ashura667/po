<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perusahaan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = 
    ['nama','alamat','kontak',
        'email','website','catatan'];

}
