<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class DataPaymentController extends Controller
{
    //
    public function indexdatapayment()
    {
        $datapayment = User::select('*')
                                        ->where('status','payment')
                                        ->where('tahun_ajarans', Carbon::now()->year)
                                        ->orderBy('created_at', 'DESC')
                                        ->get();

          // Data Tahun
        $tahun = User::select('tahun_ajarans')
          ->where('role','User')
          ->groupBy('tahun_ajarans')
          ->orderby('tahun_ajarans','DESC')->get();


        return view('backend.datapayment', [
            'datapayment' => $datapayment,
            'tahun'       => $tahun
        ]);
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
        $request->validate([
             'tgl_ujian' => 'nullable|date',
            'token' => 'nullable|string|min:4',
            'soal_benar' => 'nullable|integer|max:50',
            'soal_salah' => 'nullable|integer|max:50',
        ]);
        $pengumuman = Pengumuman::findOrFail($id);

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

    public function  updatedatapayment($id)
    {
        $user = User::findOrFail($id);

        $user->status = 'RePayment';
        $user->save();

        Session::flash('success','Calon Siswa Berhasil Diterima');

        return redirect()->back();
    }

        // Filter Tahun Ajaran
    public function tahun_ajaran(Request $request)
    {
      if ($request->tahun_ajarans != 0) {
        $payment = User::where('status','payment')
        ->where('tahun_ajarans', $request->tahun_ajarans)
        ->orderBy('created_at', 'DESC')
        ->get();
      } else {
        $payment = User::where('status','payment')
        ->orderBy('created_at', 'DESC')
        ->get();
      }

      $return = "";
      foreach($payment as $item) {
        $return .="<tr>
          <td>".$item->name."</td>
          <td>".$item->email."</td>
          <td>".$item->tahun_ajarans."</td>";
          $return .="
            <td> <span class='badge bg-success'>$item->status</span></td>
          ";
          if ($item->pengumumans != NULL ?  $item->pengumumans->hasil == "Selamat Anda Lulus" : ""){
              $return .="
              <td>
                <form
                method='POST'
                action='{{ route('updatedatapayment', $item->id) }}'
                class='d-inline'
                onsubmit='return confirm('Yakin Untuk Menerima Pembayaran ini?')'>
                @csrf
                @method('PUT')
                <input type='submit' name='status' value='Terima' class='btn btn-sm btn-primary rounded-pill'>
                </form>
              </td>";
          } else {
            $return .="
            <td>
              <a href='/backend/pendaftar/datapayment/$item->id' target='_blank' class='btn btn-sm btn-info rounded-pill'>Lihat Detail</a>
              <input type='submit' name='status' value='Terima' class='btn btn-sm btn-primary rounded-pill' disabled>
            </td>";
          }
        $return .= "</td>
        </tr>";
      }
      return $return;
    }
}
