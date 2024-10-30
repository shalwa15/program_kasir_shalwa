<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function showlogin()
   {
    if (Auth::check()) {
        return redirect('/')->with(['error'=>'Anda Sedang Login']);
    } else {
        return view('login');
    }
   }

   public function actionLogin(Request $request)
   {
    $data = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::Attempt($data)) {
        return redirect('/')->with(['success' => 'Login Berhasil']);
    }else {
        return redirect('/login')->with(['error' => 'yg dimasukan salah']);
    }
    }
    
   public function actionLogout()
   {
         Auth::logout();
         return redirect('login');
   }
}
