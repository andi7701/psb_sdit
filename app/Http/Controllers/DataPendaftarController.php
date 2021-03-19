<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataPendaftarController extends Controller
{
    //
    public function indexdataregister()
    {
        $dataregister = User::select('name','email','tahun_ajarans','status')
                                        ->where('status','register')
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
        return view('backend.dataregister',compact('dataregister'));
    }

    public function indexdatapayment()
    {
        $datapayment = User::select('name','email','tahun_ajarans','status')
                                        ->where('status','payment')
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
        return view('backend.datapayment', compact('datapayment'));
    }

    public function indexdatarepayment()
    {
        $datarepayment = User::select('name','email','tahun_ajarans','status')
                                            ->where('status','repayment')
                                            ->orderBy('created_at', 'DESC')
                                            ->get();
        return view('backend.datarepayment', compact('datarepayment'));
    }

    public function indexdatasuccess()
    {
        $datasuccess = User::select('name','email','tahun_ajarans','status')
                                ->where('status','success')
                                ->orderBy('created_at', 'DESC')
                                ->get();

        return view('backend.datasuccess',compact('datasuccess'));
    }
    
}
