<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MOProposalKeuangan extends Model
{
    use HasFactory;
    protected $table = 'proposal_penawaran_keuangan';

    protected $fillable = [
        'tanggal_surat',
        'no_surat',
        'harga_barang',
        'harga_jasa',
        'total_harga',
        'upload_prok'
    ];}
