<?php

namespace App\Models;

use CodeIgniter\Model;


class produk_layananModel extends Model
{
    protected $table = 'produk_layanan';
    protected $primaryKey = 'id_layanan';
    protected $useAutoIncrement = false;
    protected $useTimestamps = true;
}