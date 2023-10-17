<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vendor';
    protected $primaryKey       = 'idvendor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama','alamat','kontak','email'];

}
