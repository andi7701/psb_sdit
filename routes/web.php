<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\DataPendukungController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\FilePendukungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileUserController;
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
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::prefix('/backend')->middleware('role:Admin')->group(function(){
        Route::get('showcontact',[ContactController::class, 'showadmin'])->name('showcontact');
        Route::put('updatecontact/{id}',[ContactController::class, 'update'])->name('updatecontact');
    });
    
    Route::prefix('/user')->middleware('role:User')->group(function(){

        Route::middleware(['Payment'])->group(function() {
            Route::get('pengumuman',[PengumumanController::class, 'show'])->name('showpengumuman');

            // File Pendukung
            Route::get('uploadfile', [FilePendukungController::class, 'upload'])->name('uploadfile');
            Route::post('storefile',[FilePendukungController::class, 'store'])->name('storefile');
            Route::put('uploadfile/{id}', [FilePendukungController::class, 'uploadupdate'])->name('uploadfileupdate');
    
            // Data Siswa
            Route::get('datasiswa',  [DataSiswaController::class,'show'])->name('datasiswa');
            Route::post('storesiswa', [DataSiswaController::class, 'store'])->name('storesiswa');
            Route::put('datasiswa/{id}',[DataSiswaController::class,'update'])->name('updatesiswa');
    
            // Data Orang Tua
            Route::get('dataortu', [DataOrtuController::class,'show'])->name('dataortu');
            Route::post('storeortu', [DataOrtuController::class,'store'])->name('storeortu');
            Route::put('dataortu/{id}', [DataOrtuController::class,'update'])->name('updateortu');
    
            // Data Pendukung
            Route::get('datapendukung', [DataPendukungController::class,'show'])->name('datapendukung');
            Route::post('storependukung', [DataPendukungController::class,'store'])->name('storependukung');
            Route::put('datapendukung/{id}', [DataPendukungController::class,'update'])->name('updatependukung');
    
            // My Profile
            Route::get('myprofile', [ProfileUserController::class,'show'])->name('myprofile');
            Route::put('myprofile/{id}', [ProfileUserController::class,'update'])->name('updateprofile');
            Route::get('resetpassword', [ProfileUserController::class,'resetpass'])->name('resetpassword');
            Route::put('resetpassword/{id}',[ProfileUserController::class,'updatepass'])->name('updatepassword');
        });

        // Payment
        Route::middleware(['Register'])->group(function() {
            Route::get('payment', [PaymentController::class,'show'])->name('payment');
            Route::post('storepayment',[PaymentController::class,'store'])->name('storepayment');
            Route::put('payment/{id}',[PaymentController::class,'update'])->name('updatepayment');
        });

        Route::get('kontakkami',[ContactController::class, 'show'])->name('contact');
    });
});