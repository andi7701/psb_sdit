<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == 'Admin'){
                $users = User::select('id')->where('role','User')->get();
                return view('backend.home', compact('users'));
            }elseif(Auth::user()->role == 'User'){
                $cek_user = User::select('id','name','foto')->where('id',auth::user()->id)->first();
                return view('user.home', compact('cek_user'));
            }
        }else{
            abort(404);
        }
        // return view('home');
    }
}
