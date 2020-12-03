<?php

namespace App\Http\Controllers;

use App\Models\MOProposalKeuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProposalKeuangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mOProposalKeuangan = new MOProposalKeuangan();
        $data['proposalkeuangan'] = $mOProposalKeuangan::get();

        return view('proposalkeuangan', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MOProposalKeuangan  $mOProposalKeuangan
     * @return \Illuminate\Http\Response
     */
    public function show(MOProposalKeuangan $mOProposalKeuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MOProposalKeuangan  $mOProposalKeuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(MOProposalKeuangan $mOProposalKeuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MOProposalKeuangan  $mOProposalKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MOProposalKeuangan $mOProposalKeuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MOProposalKeuangan  $mOProposalKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MOProposalKeuangan $mOProposalKeuangan)
    {
        //
    }
}
