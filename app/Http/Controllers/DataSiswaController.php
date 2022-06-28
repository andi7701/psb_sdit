<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DataSiswaController extends Controller
{
    //
    public function show()
    {
        $datasiswa = DataSiswa::select('*')->where('user_id', Auth::user()->id)->first();
        return view('user.datasiswa', compact('datasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_member' => 'required|string',
            'jenjang' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'nisn' => 'numeric|nullable',
            'nis' => 'numeric|nullable',
            'npsn' => 'numeric|nullable',
            'asal_sekolah' => 'string|nullable',
            'tempat_lahir' => 'required|string',
            'ttl' => 'required|date',
            'agama' => 'required|string',
            'berkhusus' => 'required|string',
            'alamat' => 'required|string',
            'alat_transport' => 'required|string',
            'tempat_tinggal' => 'required|string',
            'hp' => 'numeric|nullable',
            'email_siswa' => 'email|nullable',
            'no_akta' => 'required|string'
        ]);

        $datasiswa = new DataSiswa;
        $datasiswa->status_member = $request->status_member;
        $datasiswa->jenjang = $request->jenjang;
        $datasiswa->jenis_kelamin = $request->jenis_kelamin;
        $datasiswa->nisn = $request->nisn;
        $datasiswa->nis = $request->nis;
        $datasiswa->npsn = $request->npsn;
        $datasiswa->asal_sekolah = $request->asal_sekolah;
        $datasiswa->tempat_lahir = $request->tempat_lahir;
        $datasiswa->ttl = $request->ttl;
        $datasiswa->agama = $request->agama;
        $datasiswa->berkhusus = $request->berkhusus;
        $datasiswa->alamat = $request->alamat;
        $datasiswa->alat_transport = $request->alat_transport;
        $datasiswa->tempat_tinggal = $request->tempat_tinggal;
        $datasiswa->hp = $request->hp;
        $datasiswa->email_siswa = $request->email_siswa;
        $datasiswa->no_akta = $request->no_akta;
        $datasiswa->user_id = Auth::user()->id;
        $datasiswa->save();

        Session::flash('success', 'Data Siswa Sudah Tersimpan');
        return redirect()->route('dataortu');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status_member' => 'required|string',
            'jenjang' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'nisn' => 'numeric|nullable',
            'nis' => 'numeric|nullable',
            'npsn' => 'numeric|nullable',
            'asal_sekolah' => 'string|nullable',
            'tempat_lahir' => 'required|string',
            'ttl' => 'required|date',
            'agama' => 'required|string',
            'berkhusus' => 'required|string',
            'alamat' => 'required|string',
            'alat_transport' => 'required|string',
            'tempat_tinggal' => 'required|string',
            'hp' => 'numeric|nullable',
            'email_siswa' => 'email|nullable',
            'no_akta' => 'required|string'
        ]);

        $datasiswa = DataSiswa::findOrFail($id);

        $datasiswa->status_member = $request->status_member;
        $datasiswa->jenjang = $request->jenjang;
        $datasiswa->jenis_kelamin = $request->jenis_kelamin;
        $datasiswa->nisn = $request->nisn;
        $datasiswa->nis = $request->nis;
        $datasiswa->npsn = $request->npsn;
        $datasiswa->asal_sekolah = $request->asal_sekolah;
        $datasiswa->tempat_lahir = $request->tempat_lahir;
        $datasiswa->ttl = $request->ttl;
        $datasiswa->agama = $request->agama;
        $datasiswa->berkhusus = $request->berkhusus;
        $datasiswa->alamat = $request->alamat;
        $datasiswa->alat_transport = $request->alat_transport;
        $datasiswa->tempat_tinggal = $request->tempat_tinggal;
        $datasiswa->hp = $request->hp;
        $datasiswa->email_siswa = $request->email_siswa;
        $datasiswa->no_akta = $request->no_akta;
        $datasiswa->user_id = Auth::user()->id;
        $datasiswa->save();

        Session::flash('success', 'Data Siswa Berhasil Terupdate');
        return redirect()->route('dataortu');
    }
}
