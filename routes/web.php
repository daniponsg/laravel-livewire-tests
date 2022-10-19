<?php

use App\Http\Livewire\Brands\AllBrands;
use App\Http\Livewire\Brands\CreateEditBrands;
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

// BRANDS
// BRANDS
// BRANDS
Route::get('/brands', AllBrands::class);
Route::get('/brands/create', CreateEditBrands::class);
Route::get('/brands/{brand}', CreateEditBrands::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
