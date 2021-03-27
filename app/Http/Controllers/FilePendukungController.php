<?php

namespace App\Http\Controllers;

use App\Models\FilePendukung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class FilePendukungController extends Controller
{
    //
    public function upload()
    {
        $filependukung = FilePendukung::select('*')->where('user_id', Auth::user()->id)->first();
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
        $filependukung->user_id = Auth::user()->id;
        $filependukung->save();

        Session::flash('success','Upload File Pendukung Sukses!');

        return redirect()->back();
    }

    public function uploadupdate(Request $request, $id)
    {
        $request->validate([
            'kartu_keluarga' => 'size:2048|mimes:jpeg,jpg,pdf',
            'akte_kelahiran' => 'size:2048|mimes:jpeg,jpg,pdf',
            'ktp_ayah' => 'size:2048|mimes:jpeg,jpg,pdf',
            'ktp_ibu' => 'size:2048|mimes:jpeg,jpg,pdf',
            'raport_terakhir' => 'max:2048|mimes:jpeg,jpg,pdf'
        ]);

        $filependukung = FilePendukung::findOrFail($id);

        $kartukeluarga = $request->file('kartu_keluarga');
        if($kartukeluarga)
        {
            if($filependukung->kartu_keluarga && file_exists(public_path('image_KK/'. $filependukung->kartu_keluarga))){
                File::delete(public_path('image_KK/'.$filependukung->kartu_keluarga));
            }
            $kartukeluargas = time(). "_" . $kartukeluarga->getClientOriginalName();
            // folder penyimpanan
            $lokasi_kk = 'image_KK';
            $kartukeluarga->move($lokasi_kk, $kartukeluargas);
            $filependukung->kartu_keluarga = $kartukeluargas;
        }

        $aktekelahiran = $request->file('akte_kelahiran');
        if($aktekelahiran)
        {
            if($filependukung->akte_kelahiran && file_exists(public_path('image_Akte/'.$filependukung->akte_kelahiran))){
                File::delete(public_path('image_Akte/'. $filependukung->akte_kelahiran));
            }
            $aktekelahirans = time(). "_" . $aktekelahiran->getClientOriginalName();
            // folder penyimpanan
            $lokasi_akte = 'image_Akte';
            $aktekelahiran->move($lokasi_akte, $aktekelahirans);
            $filependukung->akte_kelahiran = $aktekelahirans;
        }

        $ktpayah = $request->file('ktp_ayah');
        if($ktpayah)
        {
            if($filependukung->ktp_ayah && file_exists(public_path('image_KTPAyah/'. $filependukung->ktp_ayah))){
                File::delete(public_path('image_KTPAyah/'. $filependukung->ktp_ayah));
            }
            $ktpayahs = time(). "_" . $ktpayah->getClientOriginalName();
            // folder penyimpanan
            $lokasi_ktpayah = 'image_KTPAyah';
            $ktpayah->move($lokasi_ktpayah, $ktpayahs);
            $filependukung->ktp_ayah = $ktpayahs;
        }

        $ktpibu = $request->file('ktp_ibu');
        if($ktpibu)
        {
            if($filependukung->ktp_ibu && file_exists(public_path('image_KTPIbu/' . $filependukung->ktp_ibu))){
                File::delete(public_path('image_KTPIbu/'.$filependukung->ktp_ibu));
            }
            $ktpibus = time() . "_". $ktpibu->getClientOriginalName();
            // folder penyimpanan
            $lokasi_ktpibu = 'image_KTPIbu';
            $ktpibu->move($lokasi_ktpibu, $ktpibus);
            $filependukung->ktp_ibu = $ktpibus;
        }

        $raport = $request->file('raport_terakhir');
        if($raport)
        {
            if($filependukung->raport_terakhir && file_exists(public_path('image_Raport/' . $filependukung->raport_terakhir))){
                File::delete(public_path('image_Raport/'. $filependukung->raport_terakhir));
            }
            $raports = time(). "_" . $raport->getClientOriginalName();
            // folder penyimpanan
            $lokasi_raport = 'image_Raport';
            $raport->move($lokasi_raport, $raports);
            $filependukung->raport_terakhir = $raports;
        }

        $filependukung->save();

        Session::flash('success','Update File Sukses!');

        return redirect()->back();
    }
}
