<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\User;
use App\Models\RePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DataRepaymentController extends Controller
{
    //
    public function indexdatarepayment()
    {
        $datarepayment = User::select('name', 'email', 'tahun_ajarans', 'status')
            ->where('status', 'repayment')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('backend.datarepayment', compact('datarepayment'));
    }

    public function showrepayment()
    {

        $repayment = RePayment::with('user')->where('user_id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.repayment', [
            'repayment' => $repayment,
            'user' => $user
        ]);
    }

    public function storerepayment(Request $request)
    {
        $request->validate([
            'repayment' => 'required|max:2024|mimes:png,jpg,jpeg',
        ]);

        $repayment = new RePayment();

        $file = $request->file('repayment');
        if ($file) {
            $files = time() . "_" . $file->getClientOriginalName();
            // folderpenyimpanan
            $lokasi_file = 'RePayment';
            $file->move($lokasi_file, $files);
            $repayment->repayment = $files;
        }

        $repayment->user_id = Auth::user()->id;
        $repayment->jenis_pembayaran = $request->jenis_pembayaran;
        $repayment->save();

        Session::flash('success', 'Bukti Transfer Sukses Di kirim');

        return redirect()->back();
    }
}
