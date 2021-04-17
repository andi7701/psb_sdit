<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\DataPaymentController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\DataPendukungController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\FilePendukungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileAdminController;
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

        // manage contact
        Route::get('settings/showcontact',[ContactController::class, 'showadmin'])->name('showcontact');
        Route::put('settings/updatecontact/{id}',[ContactController::class, 'update'])->name('updatecontact');

        // Manage Pendaftar

        // Data Register
        Route::get('pendaftar/dataregister', [DataPendaftarController::class,'indexdataregister'])->name('dataregister');
        Route::get('pendaftar/dataregister/{id}', [DataPendaftarController::class,'showregister'])->name('showbuktipayment');
        Route::put('pendaftar/dataregister/{id}/register', [DataPendaftarController::class,'updateregister'])->name('updateregister');
        
        // Data Payment
        Route::get('pendaftar/datapayment', [DataPaymentController::class,'indexdatapayment'])->name('datapayment');
        Route::get('pendaftar/datapayment/{id}', [DataPaymentController::class,'showdatapayment'])->name('showdatapayment');
        Route::post('pendaftar/datapayment/createcbt',[DataPaymentController::class,'createcbt'])->name('createcbt');
        Route::put('pendaftar/datapayment/updatecbt/{id}',[DataPaymentController::class,'updatecbt'])->name('updatecbt');


        Route::get('pendaftar/datarepayment', [DataPendaftarController::class,'indexdatarepayment'])->name('datarepayment');
        Route::get('pendaftar/datasuccess', [DataPendaftarController::class,'indexdatasuccess'])->name('datasuccess');

        // My  profile Admin
        Route::get('myadmin',[ProfileAdminController::class,'show'])->name('myadmin');
        Route::put('myadmin/{id}', [ProfileUserController::class,'update'])->name('updateadmin');
        Route::get('resetpasswordadmin',[ProfileAdminController::class,'resetpass'])->name('resetpasswordadmin');
        Route::put('resetpasswordadmin/{id}',[ProfileAdminController::class,'updatepass'])->name('updatepasswordadmin');


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

            // generate PDF
            Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('createpdfuser');

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