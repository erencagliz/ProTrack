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
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors(['error, Girdiğiniz bilgiler doğru gözükmüyor. Lütfen tekrar deneyiniz.']);
        }

        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password], true)) {
            return redirect()->route('dashboard')->withErrors(['success, Başarıyla giriş yaptınız.']);
        } else {
            return redirect()->back()->withErrors(['error, Girdiğiniz bilgiler doğru gözükmüyor. Lütfen tekrar deneyiniz.']);
        }
    }
}
