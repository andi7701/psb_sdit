<?php

namespace App\Http\Controllers;

use App\Models\FilePendukung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class FilePendukungController extends Controller
{
    //
    public function upload()
    {
        $filependukung = FilePendukung::select('*')->where('users_id', Auth::user()->id)->first();
        // dd($filependukung);
        return view('user.upload', compact('filependukung'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kartu_keluarga' => 'required|max:2048|mimes:jpeg,jpg,pdf',
            'akte_kelahiran' => 'required|max:2048|mimes:jpeg,jpg,pdf',
            'ktp_ayah' => 'required|max:2048|mimes:jpeg,jpg,pdf',
            'ktp_ibu' => 'required|max:2048|mimes:jpeg,jpg,pdf',
            'raport_terakhir' => 'max:2048|mimes:jpeg,jpg,pdf'
        ]);


        $filependukung = new FilePendukung;

        $kartukeluarga = $request->file('kartu_keluarga');
        if($kartukeluarga)
        {
            $kk = time(). "_" . $kartukeluarga->getClientOriginalName();
            // folder penyimpanan
            $lokasi_kk = 'image_KK';
            $kartukeluarga->move($lokasi_kk, $kk);
        }

        $aktekelahiran = $request->file('akte_kelahiran');
        if($aktekelahiran)
        {
            $akte = time(). "_" . $aktekelahiran->getClientOriginalName();
            // folder penyimpanan
            $lokasi_akte = 'image_Akte';
            $aktekelahiran->move($lokasi_akte, $akte);
        }

        $ktpayah = $request->file('ktp_ayah');
        if($ktpayah)
        {
            $ktpayahs = time(). "_" . $ktpayah->getClientOriginalName();
            // folder penyimpanan
            $lokasi_ktpayah = 'image_KTPAyah';
            $ktpayah->move($lokasi_ktpayah, $ktpayahs);
        }

        $ktpibu = $request->file('ktp_ibu');
        if($ktpibu)
        {
            $ktpibus = time() . "_" . $ktpibu->getClientOriginalName();
            // folder penyimpanan
            $lokasi_ktpibu = 'image_KTPIbu';
            $ktpibu->move($lokasi_ktpibu, $ktpibus);
        }

        $raport = $request->file('raport_terakhir');
        if($raport)
        {
            $raportterakhirs = time(). "_" . $raport->getClientOriginalName();
            // folder penyimpanan
            $lokasi_raport = 'image_Raport';
            $raport->move($lokasi_raport, $raportterakhirs);
            $filependukung->raport_terakhir = $raportterakhirs;
        }

        $filependukung->kartu_keluarga = $kk;
        $filependukung->akte_kelahiran = $akte;
        $filependukung->ktp_ayah = $ktpayahs;
        $filependukung->ktp_ibu = $ktpibus;
        $filependukung->users_id = Auth::user()->id;
        $filependukung->save();

        Session::flash('success','Upload File Pendukung Sukses!');

        return redirect()->back();
    }
    public function uploadupdate(Request $request, $id)
    {

    }
}
