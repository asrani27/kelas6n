<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function checkLogin(Request $req)
    {
        $login = $req->username;
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $login, 'password' => $req->password], false)) {
            //check hak akses
            if (Auth::user()->level == 'superadmin') {
                return redirect('/superadmin');
            } else {
                return redirect('/user');
            }
        } else {
            return back()->with('info', 'username / password salah');
        }
    }
}
