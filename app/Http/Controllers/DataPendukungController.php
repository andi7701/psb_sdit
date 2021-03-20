<?php

namespace App\Http\Controllers;

use App\Models\DataOrtu;
use App\Models\DataPendukung;
use App\Models\DataSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class DataPendukungController extends Controller
{
    //
    public function show()
    {
        $datapendukung = DataPendukung::select('*')->where('users_id', Auth::user()->id)->first();
        $dataortu = DataOrtu::first();
        $datasiswa = DataSiswa::first();
        $user = User::first();
        return view('user.datapendukung', compact('datapendukung','dataortu','datasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tinggi_badan' => 'required|numeric|min:3',
            'berat_badan' => 'required|numeric|min:2',
            'jarak_rumah' => 'required|numeric',
            'waktu_tempuh' => 'required|numeric',
            'jumlah_saudara' => 'numeric|nullable',
            'jenis_prestasi' => 'string|nullable',
            'tingkat' => 'string|nullable',
            'nama_prestasi' => 'string|nullable',
            'tahun_prestasi' => 'numeric|nullable',
            'penyelenggara' => 'string|nullable',
        ]);

        $datapendukung = new DataPendukung;
        $datapendukung->tinggi_badan = $request->tinggi_badan;
        $datapendukung->berat_badan = $request->berat_badan;
        $datapendukung->jarak_rumah = $request->jarak_rumah;
        $datapendukung->waktu_tempuh = $request->waktu_tempuh;
        $datapendukung->jumlah_saudara = $request->jumlah_saudara;
        $datapendukung->jenis_prestasi = $request->jenis_prestasi;
        $datapendukung->tingkat = $request->tingkat;
        $datapendukung->nama_prestasi = $request->nama_prestasi;
        $datapendukung->tahun_prestasi = $request->tahun_prestasi;
        $datapendukung->penyelenggara = $request->penyelenggara;
        $datapendukung->users_id = Auth::user()->id;
        $datapendukung->save();

        Session::flash('success','Data Pendukung berhasil di simpan');

        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tinggi_badan' => 'required|numeric|min:3',
            'berat_badan' => 'required|numeric|min:2',
            'jarak_rumah' => 'required|numeric',
            'waktu_tempuh' => 'required|numeric',
            'jumlah_saudara' => 'numeric|nullable',
            'jenis_prestasi' => 'string|nullable',
            'tingkat' => 'string|nullable',
            'nama_prestasi' => 'string|nullable',
            'tahun_prestasi' => 'numeric|nullable',
            'penyelenggara' => 'string|nullable',
        ]);

        $datapendukung = DataPendukung::findOrFail($id);
        $datapendukung->tinggi_badan = $request->tinggi_badan;
        $datapendukung->berat_badan = $request->berat_badan;
        $datapendukung->jarak_rumah = $request->jarak_rumah;
        $datapendukung->waktu_tempuh = $request->waktu_tempuh;
        $datapendukung->jumlah_saudara = $request->jumlah_saudara;
        $datapendukung->jenis_prestasi = $request->jenis_prestasi;
        $datapendukung->tingkat = $request->tingkat;
        $datapendukung->nama_prestasi = $request->nama_prestasi;
        $datapendukung->tahun_prestasi = $request->tahun_prestasi;
        $datapendukung->penyelenggara = $request->penyelenggara;
        $datapendukung->users_id = Auth::user()->id;
        $datapendukung->save();

        Session::flash('success','Data Pendukung berhasil di update');

        return redirect()->back();

    }
}
