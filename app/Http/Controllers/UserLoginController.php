<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:mahasiswa');
    }

    public function showLoginForm() 
    {
        Auth::logout();
        return view('/user/login');
    }

    public function showRegisterForm() 
    {
        Auth::logout();
        return view('/user/register');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'NIM' => 'required',
            'password' => 'required'
        ]);

        if(auth('mahasiswa')->attempt(['NIM' => $request->NIM, 'password' => $request->password])) {
            return redirect()->secure('/');
        }

        return redirect()->back()->withInput($request->only('NIM', 'remember'));
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'NIM' => 'required',
            'password' => 'required'
        ]);

        if(auth('mahasiswa')->attempt(['NIM' => $request->NIM, 'password' => $request->password])) {
            return redirect()->secure('/');
        }

        return redirect()->back()->withInput($request->only('NIM', 'remember'));
    }
}
