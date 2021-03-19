<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;

class ProfileAdminController extends Controller
{
    //

    public function show()
    {
        $admin = User::select('*')->where('id', Auth::user()->id)->first();
        return view('backend.myadmin',compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'max:1048|mimes:png,jpg,jpeg',
            'name' => 'required|string|min:3'
        ]);

        $admin = User::findOrFail($id);

        $foto = $request->file('foto');
        if($foto)
        {
            if($admin->foto && file_exists(public_path('fotoprofile/'. $admin->foto))){
                File::delete(public_path('fotoprofile/'. $admin->foto));
            }
            $fotos = time() ."_" . $foto->getClientOriginalName();
            // folderpenyimpanan
            $lokasi_foto = 'fotoprofile';
            $foto->move($lokasi_foto, $fotos);
            $admin->foto = $fotos;
            }

            $admin->name = $request->name;
            $admin->save();

            Session::flash('success', 'Profile Berhasil Terupdate');
            return redirect()->back();
    }

    public function resetpass()
    {
        $resetpass = User::select('*')->where('id', Auth::user()->id)->first();
        return view('backend.resetpassadmin', compact('resetpass'));
    }

    public function updatepass(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|min:6|max:255|alpha_num',
            'password_confirmation' => 'required_with:password|same:password|min:6|max:255|alpha_num',
        ]);
        $hashedPassword = Auth::user()->password;

        if(\Hash::check($request->oldpassword, $hashedPassword)){
            if(!\Hash::check($request->password, $hashedPassword)) {
                $users = User::find(Auth::user()->id);
                $users->password = bcrypt($request->password);
                User::where('id', Auth::user()->id)->update(array('password' => $users->password));

                Session::flash('success','Password Sukses Terupdate');
                return redirect()->back();
            }
            else{
                Session::flash('error','Password Baru Tidak Boleh Sama dengan Password Lama');
                return redirect()->back();
            }
        }else{
            Session::flash('error','Password Lama Tidak Sama');
            return redirect()->back();
        }
    }
}
