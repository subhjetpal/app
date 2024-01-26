<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function register(Request $req)
    {
        $user = User::where(['Username' => $req->username])->first();
    }
    function login(Request $req)
    {
        $user = User::where(['Username' => $req->username])->first();
        if ($user && Hash::check($req->password, $user->Password)) {
            $req->session()->put('user', $user);
            return redirect('/home');
        } else {
            $msg = "user name or Password not matched";

            return view('login')->with('alert' ,$msg);
        }
    }
    function logout(Request $req)
    {
        if ($req->session()->has('user')) {
            session()->flush();
            $req->session()->put('alert', 'Successfully Logout');
        
            return redirect('/login');
        } else {
            return redirect('/login');
        }
    }
}
