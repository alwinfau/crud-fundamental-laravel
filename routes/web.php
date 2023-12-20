<?php

use App\Http\Controllers\MahasiswaController;
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
    return view('test');
});

// direktori Yang perlu di perhatikan saat deploy aplikasi dengan laravel
// Folder App
    // Htpp
        // Controller
        // Models
// resource
    // view (untuk view sendiri ini bisa dibuat/dikelompokan dalam satu directorei yang berbeda)
// Routes
    //web.php -> mengatur dan mendaftarkan setiap route dalam aplikasi
// file .env
    //file ini digunakan untuk melakukan konfigurasi database ke aplikasi

Route::resource('/mahasiswa', MahasiswaController::class);
