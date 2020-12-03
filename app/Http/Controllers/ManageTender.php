<?php

namespace App\Http\Controllers;

use App\Models\MOManageTender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ManageTender extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mOManageTender = new MOManageTender();
        $data['tender'] = $mOManageTender::get();

        return view('manage_tender', $data);

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
     * @param  \App\Models\MOManageTender  $mOManageTender
     * @return \Illuminate\Http\Response
     */
    public function show(MOManageTender $mOManageTender)
    {
        //
        $tender = $mOManageTender::where('id_tender', 1)->get();

        dd($tender);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MOManageTender  $mOManageTender
     * @return \Illuminate\Http\Response
     */
    public function edit(MOManageTender $mOManageTender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MOManageTender  $mOManageTender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MOManageTender $mOManageTender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MOManageTender  $mOManageTender
     * @return \Illuminate\Http\Response
     */
    public function destroy(MOManageTender $mOManageTender)
    {
        //
    }
}
