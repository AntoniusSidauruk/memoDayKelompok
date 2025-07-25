<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function halamanLogin(){
        return view('login.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt($request->only('name','password'))){
            return redirect('/home');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function simpanRegistrasi(Request $request){
        //dd($request->all());
        User::create([
            'name'=>$request->name,
            'level'=>'User Biasa',
            'email'=>$request->email,
            'password' => bcrypt($request->password),
            'remember_token'=>Str::random(60),
        ]);
        return view('login.login');
    }
}
