<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        return view('backend.detailsiswa', compact('user'));
    }
}
