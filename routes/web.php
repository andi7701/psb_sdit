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
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify' => true]);


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::prefix('/backend')->middleware('role:Admin')->group(function(){
        // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.page');
    });
    
    Route::prefix('/user')->middleware('role:User')->group(function(){
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('user.page');
        Route::get('kontakkami',[App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
        Route::get('pengumuman',[App\Http\Controllers\PengumumanController::class, 'show'])->name('showpengumuman');

        // File Pendukung
        Route::get('uploadfile', [App\Http\Controllers\FilePendukungController::class, 'upload'])->name('uploadfile');
        Route::post('storefile',[App\Http\Controllers\FilePendukungController::class, 'store'])->name('storefile');
        Route::put('uploadfile/{id}', [App\Http\Controllers\FilePendukungController::class, 'uploadupdate'])->name('uploadfileupdate');



        Route::get('datasiswa', function(){return view('user.datasiswa');})->name('datasiswa');
        Route::get('dataortu', function(){return view('user.dataortu');})->name('dataortu');
        Route::get('datapendukung', function(){return view('user.datapendukung');})->name('datapendukung');
    });
});