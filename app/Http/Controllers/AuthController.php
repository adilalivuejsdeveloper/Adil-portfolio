<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('admin.layout.authentication.register');
    }
    public function login()
    {
        return view('admin.layout.authentication.login');
    }

    public function store(Request $request)
    {
        $data = $request->input();
        unset($data['_token']);
        $store = User::create($data);
        return redirect(route('login'));
    }
    public function login_process(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Auth::login(Auth::user(), true);
            return redirect('/index');
        } else {
            return back();
        }
    }
    public function logout()
    {
        $logout = Auth::logout();
        return redirect(route('login'));
    }
}
