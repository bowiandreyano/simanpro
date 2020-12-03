<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
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
     * Show the application supplier.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function supplier()
    {
        return view('supplier');
    }
}
