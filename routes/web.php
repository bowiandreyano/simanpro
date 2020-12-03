<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/tender', [App\Http\Controllers\TenderController::class, 'tender'])->name('tender');
// Route::get('/proposal_keu', [App\Http\Controllers\Proposal_keu::class, 'proposal_keu'])->name('proposal_keu');
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'vendor'])->name('vendor');
Route::get('/proyek', [App\Http\Controllers\ProyekController::class, 'proyek'])->name('proyek');
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
Route::get('/tender/detail/{$id}', [App\Http\Controllers\DetailTender::class, 'tender'])->name('tender');

Route::resource('tender', 'App\Http\Controllers\DetailTender');
Route::resource('proposalkeuangan', 'App\Http\Controllers\ProposalKeuangan');
Route::resource('manage_tender', 'App\Http\Controllers\ManageTender');

Route::get('/default', function () {
    return view('default');
});

