<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mahasiswa;

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
            'nama' => 'required',
            'programStudi' => 'required',
            'password' => 'required'
        ]);

        Mahasiswa::create([
            'NIM' => $request->NIM,
            'name' => $request->nama,
            'programStudi' => $request->programStudi,
            'password' => bcrypt($request->password);
        ]);

        return redirect()->secure('user');
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
