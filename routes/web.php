<?php

use App\Http\Controllers\GajiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::resource('roles', RoleController::class);
Route::group(['middleware' => ['auth']], function() {
    
    Route::resource('users', UserController::class);
    Route::resource('gaji', GajiController::class);

    Route::get('/my-profile', [ProfileController::class, 'index'])->name('myprofile');
   
    Route::get('/profile/pendidikan', [ProfileController::class, 'pendidikanShow'])->name('pendidikan.show');
    Route::post('/profile/pendidikan-update', [ProfileController::class, 'pendidikanUpdate'])->name('pendidikan.update');;

    Route::get('/profile/bahasa', [ProfileController::class, 'bahasaShow'])->name('bahasa.show');
    Route::post('/profile/bahasa-update', [ProfileController::class, 'bahasaUpdate'])->name('bahasa.update');
    
    Route::get('/profile/data-diri', [ProfileController::class, 'personelShow'])->name('personel.datadiri');
    Route::put('/profile/personel-update', [ProfileController::class, 'personelUpdate'])->name('personel.update');
    
    Route::get('/profile/personel-bio', [ProfileController::class, 'personalBioShow'])->name('personel.bio');
    Route::post('/profile/personel-bio-update', [ProfileController::class, 'personelBioUpdate'])->name('personel.bio.update');
    
    Route::get('/profile/penugasan-luar', [ProfileController::class, 'penugasanShow'])->name('profile.penugasan');
    Route::post('/profile/penugasan-update', [ProfileController::class, 'penugasannUpdate'])->name('penugasan.update');
    
    Route::get('/profile/tanda-kehormatan', [ProfileController::class, 'tandaKehormatanShow'])->name('profile.tandakehormatan');
    Route::post('/profile/tanda-kehormatan-update', [ProfileController::class, 'tandaKehormatanUpdate'])->name('tandakehormatan.update');

    Route::get('/profile/pengembangan-pelatihan', [ProfileController::class, 'pelatihanShow'])->name('pelatihan.show');
    Route::post('/profile/pengembangan-pelatihan-update', [ProfileController::class, 'pelatihanUpdate'])->name('pelatihan.update');

    Route::get('/', function () {
        return view('home');
    });
    
    Route::get('/pengajuan', function () {
        return view('pengajuan.index');
    });
    
    Route::get('/pengajuan/list', function () {
        return view('pengajuan.list');
    });
    // Route::get('/profile/pendidikan', function () {
    //     return view('profile.pendidikan');
    // });

    // Route::get('/profile/bahasa', function () {
    //     return view('profile.bahasa');
    // });
    // Route::get('/profile/penugasan', function () {
    //     return view('profile.penugasan');
    // });
    
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
