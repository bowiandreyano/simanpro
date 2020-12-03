<?php

namespace App\Http\Controllers;

use App\Models\MODetailTender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Vendor;

class DetailTender extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mODetailTender = new MODetailTender();
        $data['tender'] = $mODetailTender::get();

        return view('tender', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'tahun' => 'required',
        //     'status' => 'required',
        //     'catatan_status' => 'required',
        //     'nama_proyek' => 'required',
        //     'nama_klien' => 'required',
        //     'nama_unit' => 'required',
        //     'nama_up_klien' => 'required',
        //     'deskripsi_proyek' => 'required',
        //     'catatan' => 'required',
        //     'uploadd_rfp' => 'required|file|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        //     'tanggal_proposal_keuangan' => 'required',
        //     'no_surat_keuangan' => 'required',
        //     'harga_barang_keuangan' => 'required',
        //     'harga_jasa_keuangan' => 'required',
        //     'total_prok' => 'required',
        //     'upload_prok' => 'required|file|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        //     'tanggal_bafo' => 'required',
        //     'no_bafo' => 'required',
        //     'harga_barang_bafo' => 'required',
        //     'harga_jasa_bafo' => 'required',
        //     'total_bafo' => 'required',
        //     'upload_bafo' => 'required|file|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        //     'nama_vendor' => 'required',
        //     'no_qou' => 'required',
        //     'tgl_quo' => 'required',
        //     'validate' => 'required',
        //     'upload_quo' => 'required|file|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        //     'harga_barang' => 'required',
        //     'harga_jasa' => 'required',
        //     'total_harga' => 'required'
        // ]);
        $tujuan_upload = 'data_file';
        // menyimpan data file yang diupload ke variabel $file 1
        $file = $request->file('uploadd_rfp');

        $nama_file = time()."_".$file->getClientOriginalName();

        // menyimpan data file yang diupload ke variabel $file 2
        $filefile = $request->file('upload_prok');

        $nama_file_file = time()."_".$filefile->getClientOriginalName();

        // menyimpan data file yang diupload ke variabel $file 3
        // $filefilefile = $request->file('upload_bafo');

        // $nama_file_file_file = time()."_".$filefilefile->getClientOriginalName();

        // menyimpan data file yang diupload ke variabel $file 3
        if (isset($nama_file_file_file)) {
            $filefilefile = $request->file('upload_bafo');
            $nama_file_file_file = time()."_".$filefilefile->getClientOriginalName();
            $filefilefile->move($tujuan_upload,$nama_file_file_file);
        } else {
            if ($request->no_bafo == ""||$request->tanggal_bafo == ""||$request->harga_barang_bafo == ""||$request->harga_jasa_bafo == ""||$request->total_bafo == "") {
                $request->no_bafo == "";
                $request->tanggal_bafo == "";
                $request->harga_barang_bafo == "";
                $request->harga_jasa_bafo == "";
                $request->total_bafo == "";
            }
            $nama_file_file_file = "null";
        }
        
        $filefilefilefile = $request->file('upload_quo');

        $nama_file_file_file_file = time()."_".$filefilefilefile->getClientOriginalName();

                  // isi dengan nama folder tempat kemana file diupload
        $file->move($tujuan_upload,$nama_file);
        $filefile->move($tujuan_upload,$nama_file_file);
        $filefilefilefile->move($tujuan_upload,$nama_file_file_file_file);

        MODetailTender::create([
            'tahun' => $request->tahun,
            'status' => $request->status,
            'catatan_status' => $request->catatan_status,
            'nama_proyek' => $request->nama_proyek,
            'nama_klien' => $request->nama_klien,
            'nama_unit' => $request->nama_unit,
            'nama_up_klien' => $request->nama_up_klien,
            'deskripsi_proyek' => $request->deskripsi_proyek,
            'catatan' => $request->catatan,
            'uploadd_rfp' => $nama_file,
            'tanggal_proposal_keuangan' => $request->tanggal_proposal_keuangan,
            'no_surat_keuangan' => $request->no_surat_keuangan,
            'harga_barang_keuangan' => $request->harga_barang_keuangan,
            'harga_jasa_keuangan' => $request->harga_jasa_keuangan,
            'total_prok' => $request->total_prok,
            'upload_prok' => $nama_file_file,
            'tanggal_bafo' => $request->tanggal_bafo,
            'no_bafo' => $request->no_bafo,
            'harga_barang_bafo' => $request->harga_barang_bafo,
            'harga_jasa_bafo' => $request->harga_jasa_bafo,
            'total_bafo' => $request->total_bafo,
            'upload_bafo' => $nama_file_file_file,
            'nama_vendor' => $request->nama_vendor,
            'no_qou' => $request->no_qou,
            'tgl_quo' => $request->tgl_quo,
            'validate' => $request->validate,
            'upload_quo' => $nama_file_file_file_file,
            'harga_barang' => $request->harga_barang,
            'harga_jasa' => $request->harga_jasa,
            'total_harga' => $request->total_harga,
        ]);

        $getIDTender = MODetailTender::orderBy('id_tender', 'desc')
        ->limit(1)
        ->get();

        Vendor::create([
            'id_tender' => $getIDTender[0]->id_tender,
            'nama_supplier' => $request->nama_vendor,
            'no_quotation' => $request->no_qou,
            'tgl_quotation' => $request->tgl_quo,
            'validate' => $request->validate,
            'upload_quotation' => $nama_file_file_file_file,
            'harga_barang' => $request->harga_barang,
            'harga_jasa' => $request->harga_jasa,
            'total_harga' => $request->total_harga,
        ]);

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MODetailTender  $mODetailTender
     * @return \Illuminate\Http\Response
     */
    public function show(MODetailTender $mODetailTender)
    {
        $tender = $mODetailTender::where('id_tender', 1)->get();

        dd($tender);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MODetailTender  $mODetailTender
     * @return \Illuminate\Http\Response
     */
    public function edit(MODetailTender $mODetailTender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MODetailTender  $mODetailTender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MODetailTender $mODetailTender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MODetailTender  $mODetailTender
     * @return \Illuminate\Http\Response
     */
    public function destroy(MODetailTender $mODetailTender)
    {
        //
    }
}
