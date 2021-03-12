<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;

class ProfileUserController extends Controller
{
    //
    public function show()
    {
        $user = User::select('*')->where('id', Auth::user()->id)->first();
        return view('user.myprofile', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'size:1048|mimes:png,jpg,jpeg',
            'name' => 'required|string|min:3'
        ]);

        $user = User::findOrFail($id);

        $foto = $request->file('foto');
        if($foto)
        {
            if($user->foto && file_exists(public_path('fotoprofile/'. $user->foto))){
                File::delete(public_path('fotoprofile/'. $user->foto));
            }
            $fotos = time() ."_" . $foto->getClientOriginalName();
            // folderpenyimpanan
            $lokasi_foto = 'fotoprofile';
            $foto->move($lokasi_foto, $fotos);
            $user->foto = $fotos;
        }

        $user->name = $request->name;
        $user->save();

        Session::flash('success', 'Profile Berhasil Terupdate');
        return redirect()->back();
    }
}
