<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index ()
    {
        error_reporting(0);
        return view('pages.auth.login');
    }

    public function post (Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (!$email || !$password) {
            return redirect()->back()->withErrors(['error, Bütün alanlar doldurulmak zorundadır. Lütfen tekrar deneyiniz.']);
        } else {
            if (\Auth::attempt(['email' => $email, 'password' => $password], true)) {
                return redirect()->route('dashboard')->withErrors(['success, Başarıyla giriş yaptınız.']);
            } else {
                return redirect()->back()->withErrors(['error, Girdiğiniz bilgiler doğru gözükmüyor. Lütfen tekrar deneyiniz.']);
            }
        }
    }
}
