<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Session;
use Carbon\Carbon;

class DataPendaftarController extends Controller
{
    //
    public function indexdataregister()
    {
        $dataregister = User::select('*')
                                        ->where('status','register')
                                        ->where('tahun_ajarans', Carbon::now()->year)
                                        ->orderBy('created_at', 'DESC')
                                        ->get();

        // Data Tahun
        $tahun = User::select('tahun_ajarans')
          ->where('role','User')
          ->groupBy('tahun_ajarans')
          ->orderby('tahun_ajarans','DESC')->get();

        return view('backend.dataregister',compact('dataregister','tahun'));
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

    // Filter Tahun Ajaran
    public function tahun_ajaran(Request $request)
    {
      if ($request->tahun_ajarans != 0) {
        $dataregister = User::where('status','register')
        ->where('tahun_ajarans', $request->tahun_ajarans)
        ->orderBy('created_at', 'DESC')
        ->get();
      } else {
        $dataregister = User::where('status','register')
        ->orderBy('created_at', 'DESC')
        ->get();
      }

      $return = "";
      foreach($dataregister as $item) {
        $return .="<tr>
          <td>".$item->name."</td>
          <td>".$item->email."</td>
          <td>".$item->tahun_ajarans."</td>";
          $return .="
            <td> <span class='badge bg-success'>$item->status</span></td>
          ";
          if ($item->payments != NULL){
              $return .="
              <td>
                <form
                method='POST'
                action='{{ route('updateregister', $dr->id) }}'
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
              <a href='#' target='_blank' class='disabled btn btn-sm btn-info rounded-pill'>Lihat Bukti</a>
              <a href='#' class='disabled btn btn-sm btn-primary rounded-pill'>Terima</a>
            </td>";
          }
        $return .= "</td>
        </tr>";
      }
      return $return;
    }

}
