<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        return view('back.login');
    }

    public function loginPost(Request $request){

        if(Auth::attempt(['email' =>$request->email , 'password' =>$request->password])){
            toastr()->success('Welcome '. Auth::user()->name);
            return redirect()->route('dashboard.');
        }
        return redirect()->route('dashboard.login.index')->withErrors('Email və ya Şifre səhvdi...');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('dashboard.login.index');
    }
}
