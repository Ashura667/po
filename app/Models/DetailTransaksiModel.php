<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransaksiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail_transaksi';
    protected $primaryKey       = 'iddetailtransaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['qty','total'];

}
