<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataPaymentController extends Controller
{
    //
    public function indexdatapayment()
    {
        $datapayment = User::select('*')
                                        ->where('status','payment')
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
        return view('backend.datapayment', compact('datapayment'));
    }

    public function showdatapayment($id)
    {
        $user = User::findOrFail($id);
        $pengumuman = Pengumuman::all();

        return view('backend.detailsiswa', [
            'user' => $user,
            'pengumuman' => $pengumuman,
        ]);
    }

    public function createcbt(Request $request){
        $request->validate([
            'tgl_ujian' => 'nullable|date',
            'username' => 'nullable|string',
            'password' => 'nullable|string|min:4',
            'token' => 'nullable|string|min:4',
            'url' => 'nullable|string'
        ]);

        $pengumuman = new Pengumuman;
        $pengumuman->tgl_ujian = $request->tgl_ujian;
        $pengumuman->username = $request->username;
        $pengumuman->password = $request->password;
        $pengumuman->token = $request->token;
        $pengumuman->url = $request->url;
        $pengumuman->user_id = $request->user_id;

        $pengumuman->save();

        Session::flash('success','Pengumuman CBT Berhasil Di Buat');

        return redirect()->back();
    }

    public function updatecbt(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
             'tgl_ujian' => 'nullable|date',
            'token' => 'nullable|string|min:4',
            'soal_benar' => 'nullable|integer',
            'soal_salah' => 'nullable|integer',
        ]);

        $pengumuman->tgl_ujian = $request->tgl_ujian;
        $pengumuman->token = $request->token;
        $pengumuman->soal_benar = $request->soal_benar;
        $pengumuman->soal_salah = $request->soal_salah;

        if($request->soal_benar >= 10 && $request->soal_benar <= 15)
        {
            $pengumuman->nilai = 65;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
        elseif($request->soal_benar >= 16 && $request->soal_benar <= 19)
        {
            $pengumuman->nilai = 70;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
        elseif($request->soal_benar >= 20 && $request->soal_benar <= 25)
        {
            $pengumuman->nilai = 75;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
         elseif($request->soal_benar >= 26 && $request->soal_benar <= 30)
        {
            $pengumuman->nilai = 80;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
         elseif($request->soal_benar >= 31 && $request->soal_benar <= 35)
        {
            $pengumuman->nilai = 85;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
         elseif($request->soal_benar >= 36 && $request->soal_benar <= 40)
        {
            $pengumuman->nilai = 90;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
         elseif($request->soal_benar >= 41 && $request->soal_benar <= 45)
        {
            $pengumuman->nilai = 95;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
         elseif($request->soal_benar >= 46 && $request->soal_benar <= 50)
        {
            $pengumuman->nilai = 100;
            $pengumuman->hasil = "Selamat Anda Lulus";
        }
        else
        {
            $pengumuman->nilai = 0;
            $pengumuman->hasil = "Maaf Anda Tidak Lulus";
        }

        $pengumuman->user_id = $request->user_id;
        $pengumuman->save();

        Session::flash('success','Pengumuman CBT Sukses Terupdate');

        return redirect()->back();
    }
}