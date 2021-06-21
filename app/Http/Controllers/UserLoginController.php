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
            'password' => 'required'
        ]);

        if(auth('mahasiswa')->attempt(['NIM' => $request->NIM, 'password' => $request->password])) {
            return redirect()->secure('')->with('message', 'Anda Berhasil Login!');
        }

        return redirect()->secure('login')->with('failLogin', 'NIM atau Password salah');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'NIM' => 'required|unique:mahasiswas,NIM',
            'nama' => 'required',
            'programStudi' => 'required',
            'password' => 'required'
        ], [
            'NIM.required' => 'NIM Wajib Diisi!',
            'NIM.unique' => 'NIM Sudah Terdaftar!',
            'nama.required' => 'Nama Wajib Diisi!',
            'programStudi.required' => 'Program Studi Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!'
        ]);

        Mahasiswa::create([
            'NIM' => $request->NIM,
            'name' => $request->nama,
            'programStudi' => $request->programStudi,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->secure('login/user')->with('regisSukses', "Registrasi Akun Mahasiswa Berhasil");
    }
}
