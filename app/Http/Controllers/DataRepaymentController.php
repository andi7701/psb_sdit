<?php

namespace App\Http\Controllers;

use App\Models\RePayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataRepaymentController extends Controller
{
    //
     public function indexdatarepayment()
    {
        $datarepayment = User::select('name','email','tahun_ajarans','status')
                                            ->where('status','repayment')
                                            ->orderBy('created_at', 'DESC')
                                            ->get();
        return view('backend.datarepayment', compact('datarepayment'));
    }

    public function showrepayment()
    {
         $repayment = RePayment::select('*')->where('user_id', Auth::user()->id)->first();
         $user = User::select('*')->where('id', Auth::user()->id)->first();
        return view('user.repayment', compact('repayment','user'));
    }
}
