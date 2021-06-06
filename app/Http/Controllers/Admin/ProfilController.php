<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UKM;
use App\User;

class ProfilController extends Controller
{
    public function index() 
    {
        $ukm = UKM::select('*')->where([['idUKM', '!=', '1'],  ['idUKM', Auth()->user()->UKM_idUKM]])->first();
        return view('/admin/profil', ['ukm' => $ukm]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdUKM' => 'required',
    		'editNamaUKM' => 'required',
    		'editEmail' => 'required',
    		'editUsername' => 'required'
    	]);
        $user = User::where([['UKM_idUKM', $request->editIdUKM]])->first();
        $user->name = $request->editNamaUKM;
        $user->email = $request->editEmail;
        $user->username = $request->editUsername;
        if($request->editPassword != null) 
        {
            $user->password = bcrypt($request->editPassword);
        }
        $user->save();

        $ukm = UKM::where([['idUKM', $request->editIdUKM]])->first();
        $ukm->namaUKM = $request->editNamaUKM;
        $ukm->save();
        return redirect()->secure('admin/profil')->with('sukses', "Data Profil UKM " .$ukm->namaUKM. " terupdate");
    }
    
    public function logo(Request $request) {
        $this->validate($request,[
    		"uploadLogo" => 'required'
    	]);

        $foto = $request->file("uploadLogo");
        $namaFoto = time().'-'.Auth()->user()->UKM_idUKM.'.'.$foto->getClientOriginalExtension();
        $pathUpload = 'assets/images/logo/';

        $foto->move($pathUpload, $namaFoto);
        $user = User::where([['UKM_idUKM', $request->editIdUKM]])->first();
        $user->foto = $namaFoto;
        $user->save();

        return redirect()->secure('admin/profil')->with('sukses', "Logo UKM " .$user->name. " terupdate");
	}
}
