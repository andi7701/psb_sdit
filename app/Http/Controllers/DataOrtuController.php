<?php

namespace App\Http\Controllers;

use App\Models\DataOrtu;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class DataOrtuController extends Controller
{
    //
    public function show()
    {
        $dataortu = DataOrtu::select('*')->where('user_id', Auth::user()->id)->first();
        $datasiswa = DataSiswa::first();
        return view('user.dataortu', compact('dataortu','datasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ayah' => 'required|string|min:2',
            'tahun_lahir' => 'required|numeric|min:4',
            'alamat_ayah' => 'required|string',
            'pendidikan_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'penghasilan_ayah' => 'required|numeric',
            'gelar_ayah' => 'string|nullable',
            'email_ayah' => 'email|nullable',
            'no_hp_ayah' => 'numeric|nullable|min:9',
            'nama_ibu' => 'required|string|min:2',
            'tahun_lahir_ibu' => 'required|numeric|min:4',
            'alamat_ibu' => 'required|string',
            'pendidikan_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'penghasilan_ibu' => 'required|numeric',
            'gelar_ibu' => 'string|nullable',
            'email_ibu' => 'email|nullable',
            'no_hp_ibu' => 'numeric|nullable|min:9',
            'nama_wali' => 'string|nullable',
            'tahun_lahir_wali' => 'numeric|nullable',
            'alamat_wali' => 'string|nullable',
            'pekerjaan_wali' => 'string|nullable',
            'penghasilan_wali' => 'numeric|nullable',
        ]);

        $dataortu = new DataOrtu;
        $dataortu->nama_ayah =  $request->nama_ayah;
        $dataortu->tahun_lahir = $request->tahun_lahir;
        $dataortu->alamat_ayah = $request->alamat_ayah;
        $dataortu->pendidikan_ayah = $request->pendidikan_ayah;
        $dataortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $dataortu->penghasilan_ayah = $request->penghasilan_ayah;
        $dataortu->gelar_ayah = $request->gelar_ayah;
        $dataortu->email_ayah = $request->email_ayah;
        $dataortu->no_hp_ayah = $request->no_hp_ayah;
        $dataortu->nama_ibu = $request->nama_ibu;
        $dataortu->tahun_lahir_ibu = $request->tahun_lahir_ibu;
        $dataortu->alamat_ibu =$request->alamat_ibu;
        $dataortu->pendidikan_ibu =$request->pendidikan_ibu;
        $dataortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $dataortu->penghasilan_ibu = $request->penghasilan_ibu;
        $dataortu->gelar_ibu = $request->gelar_ibu;
        $dataortu->email_ibu = $request->email_ibu;
        $dataortu->no_hp_ibu = $request->no_hp_ibu;
        $dataortu->nama_wali = $request->nama_wali;
        $dataortu->tahun_lahir_wali = $request->tahun_lahir_wali;
        $dataortu->alamat_wali = $request->alamat_wali;
        $dataortu->pekerjaan_wali = $request->pekerjaan_wali;
        $dataortu->pendidikan_wali = $request->pendidikan_wali;
        $dataortu->penghasilan_wali = $request->penghasilan_wali;
        $dataortu->user_id = Auth::user()->id;
        $dataortu->save();

        Session::flash('success','Data Orang Tua Tersimpan');

        return redirect()->route('datapendukung');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ayah' => 'required|string|min:2',
            'tahun_lahir' => 'required|numeric|min:4',
            'alamat_ayah' => 'required|string',
            'pendidikan_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'penghasilan_ayah' => 'required|numeric',
            'gelar_ayah' => 'string|nullable',
            'email_ayah' => 'email|nullable',
            'no_hp_ayah' => 'numeric|nullable|min:9',
            'nama_ibu' => 'required|string|min:2',
            'tahun_lahir_ibu' => 'required|numeric|min:4',
            'alamat_ibu' => 'required|string',
            'pendidikan_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'penghasilan_ibu' => 'required|numeric',
            'gelar_ibu' => 'string|nullable',
            'email_ibu' => 'email|nullable',
            'no_hp_ibu' => 'numeric|nullable|min:9',
            'nama_wali' => 'string|nullable',
            'tahun_lahir_wali' => 'numeric|nullable',
            'alamat_wali' => 'string|nullable',
            'pekerjaan_wali' => 'string|nullable',
            'penghasilan_wali' => 'numeric|nullable',
        ]);

        $dataortu = DataOrtu::findOrFail($id);
        $dataortu->nama_ayah =  $request->nama_ayah;
        $dataortu->tahun_lahir = $request->tahun_lahir;
        $dataortu->alamat_ayah = $request->alamat_ayah;
        $dataortu->pendidikan_ayah = $request->pendidikan_ayah;
        $dataortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $dataortu->penghasilan_ayah = $request->penghasilan_ayah;
        $dataortu->gelar_ayah = $request->gelar_ayah;
        $dataortu->email_ayah = $request->email_ayah;
        $dataortu->no_hp_ayah = $request->no_hp_ayah;
        $dataortu->nama_ibu = $request->nama_ibu;
        $dataortu->tahun_lahir_ibu = $request->tahun_lahir_ibu;
        $dataortu->alamat_ibu =$request->alamat_ibu;
        $dataortu->pendidikan_ibu =$request->pendidikan_ibu;
        $dataortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $dataortu->penghasilan_ibu = $request->penghasilan_ibu;
        $dataortu->gelar_ibu = $request->gelar_ibu;
        $dataortu->email_ibu = $request->email_ibu;
        $dataortu->no_hp_ibu = $request->no_hp_ibu;
        $dataortu->nama_wali = $request->nama_wali;
        $dataortu->tahun_lahir_wali = $request->tahun_lahir_wali;
        $dataortu->alamat_wali = $request->alamat_wali;
        $dataortu->pekerjaan_wali = $request->pekerjaan_wali;
        $dataortu->pendidikan_wali = $request->pendidikan_wali;
        $dataortu->penghasilan_wali = $request->penghasilan_wali;
        $dataortu->user_id = Auth::user()->id;
        $dataortu->save();

        Session::flash('success','Data Orang Tua Terupdate');

        return redirect()->route('datapendukung');

    }
}
