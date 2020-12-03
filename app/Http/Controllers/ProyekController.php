<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application proyek.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function proyek()
    {
        return view('proyek');
    }
}
