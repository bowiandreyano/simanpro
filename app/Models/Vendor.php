<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'data_supplier';

    protected $fillable = [
        'id_tender',
        'nama_supplier',
        'no_quotation',
        'tgl_quotation',
        'validate',
        'upload_quotation',
        'harga_barang',
        'harga_jasa',
        'total_harga'
    ];
}
