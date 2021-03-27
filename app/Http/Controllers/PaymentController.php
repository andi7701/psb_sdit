<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;

class PaymentController extends Controller
{
    //
    public function show()
    {
        $payment = Payment::select('*')->where('user_id', Auth::user()->id)->first();
        return view('user.payment', compact('payment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment' => 'required|max:2024|mimes:png,jpg,jpeg,pdf',
        ]);

        $payment = new Payment;

        $file = $request->file('payment');
        if($file)
        {
            $files = time() ."_" . $file->getClientOriginalName();
            // folderpenyimpanan
            $lokasi_file = 'Payment';
            $file->move($lokasi_file, $files);
            $payment->payment = $files;
        }

        $payment->user_id = Auth::user()->id;
        $payment->save();

        Session::flash('success','Bukti Transfer Sukses Di kirim');


        return redirect()->back();

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'payment' => 'required|max:2024|mimes:png,jpg,jpeg,pdf',
        ]);

        $payment = Payment::findOrFail($id);

        $file = $request->file('payment');
        if($file)
        {
            if($payment->payment && file_exists(public_path('Payment/'. $payment->payment)))
            {
                File::delete(public_path('Payment/' . $payment->payment));
            }
            $files = time(). "_" . $file->getClientOriginalName();
            // folder penyimpanan
            $lokasi_file = 'Payment';
            $file->move($lokasi_file, $files);
            $payment->payment = $files;
        }

        $payment->user_id = Auth::user()->id;
        $payment->save();
        
        Session::flash('success','Sukses Update Bukti Transfer');

        return redirect()->back();
    }
}
