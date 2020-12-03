<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
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
     * Show the application vendor.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function vendor()
    {
        return view('vendor');
    }
}
