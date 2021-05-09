<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Session;

class DataPendaftarController extends Controller
{
    //
    public function indexdataregister()
    {
        $dataregister = User::select('*')
                                        ->where('status','register')
                                        ->orderBy('created_at', 'DESC')
                                        ->get();

        return view('backend.dataregister',compact('dataregister'));
    }

    public function showregister($id)
    {
        $user = User::findOrFail($id);

        return view('backend.bukti.buktipayment', compact('user'));
    }

    public function updateregister($id)
    {
        $user = User::findOrFail($id);

        $user->status = 'Payment';
        $user->save();

        Session::flash('success','Calon Siswa Berhasil Diterima');

        return redirect()->back();
    }

    public function indexdatasuccess()
    {
        $datasuccess = User::select('name','email','tahun_ajarans','status')
                                ->where('status','success')
                                ->orderBy('created_at', 'DESC')
                                ->get();

        return view('backend.datasuccess',compact('datasuccess'));
    }

    // public function showpayment($foto)
    // {
    //     $path = public_path('Payment/'. $foto);

    //     if(!File::exists($path)) {
    //         abort(404);
    //     }

    //     $file = File::get($path);
    //     $type = File::mimeType($path);

    //     $response = FacadesResponse::make($file, 200);
    //     $response->header("Content-Type", $type);

    //     return $response;
    // }
    
}
