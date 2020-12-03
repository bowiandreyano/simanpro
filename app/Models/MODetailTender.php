<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MODetailTender extends Model
{
    use HasFactory;
    protected $table = 'detail_tender';

    protected $fillable = [
        'tahun',
        'status',
        'catatan_status',
        'nama_proyek',
        'nama_klien',
        'nama_unit',
        'nama_up_klien',
        'deskripsi_proyek',
        'catatan',
        'uploadd_rfp',
        'tanggal_proposal_keuangan',
        'no_surat_keuangan',
        'harga_barang_keuangan',
        'harga_jasa_keuangan',
        'total_prok',
        'upload_prok',
        'tanggal_bafo',
        'no_bafo',
        'harga_barang_bafo',
        'harga_jasa_bafo',
        'total_bafo',
        'upload_bafo',
        'nama_vendor',
        'no_qou',
        'tgl_quo',
        'validate',
        'upload_quo',
        'harga_barang',
        'harga_jasa',
        'total_harga'
    ];

}
