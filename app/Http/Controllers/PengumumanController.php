<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    //
    public function show()
    {
        $pengumuman = Pengumuman::select('*')->where('user_id', Auth::user()->id)->first();
        return view('user.pengumuman', compact('pengumuman'));
    }
}
