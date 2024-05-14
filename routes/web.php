<?php

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

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Route::resource('profile', ProfileController::class);
    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('/profile/pendidikan', [ProfileController::class, 'pendidikanShow'])->name('pendidikan.show');
    Route::get('/profile/bahasa', [ProfileController::class, 'bahasaShow'])->name('bahasa.show');
    Route::post('/profile/pendidikan-update', [ProfileController::class, 'pendidikanUpdate'])->name('pendidikan.update');;
    Route::post('/profile/bahasa-update', [ProfileController::class, 'bahasaUpdate'])->name('bahasa.update');
    Route::get('/profile/data-diri', [ProfileController::class, 'personelShow'])->name('personel.datadiri');
    Route::put('/profile/personel-update', [ProfileController::class, 'personelUpdate'])->name('personel.update');

    Route::get('/', function () {
        return view('home');
    });
    
    // Route::get('/profile', function () {
    //     return view('profile.index');
    // });
    
    // Route::get('/profile/data-diri', function () {
    //     return view('profile.datadiri');
    // });
    // Route::get('/profile/pendidikan', function () {
    //     return view('profile.pendidikan');
    // });

    // Route::get('/profile/bahasa', function () {
    //     return view('profile.bahasa');
    // });
    Route::get('/profile/penugasan', function () {
        return view('profile.penugasan');
    });
    
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
