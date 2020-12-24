<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $email = $request->Username;
        $password = $request->Password;
        if(Auth::attempt(['email'=> $email,'password' => $password])){
           return redirect('home');
        }
        else{
            return redirect()->back()->with('thongbao',"Tài khoản hoặc mật khẩu bị sai");
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}
