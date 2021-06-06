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
    
    public function tambah(Request $request)
    {
        $this->validate($request,[
    		'namaUKM' => 'required',
    	]);

        UKM::create([
    		'namaUKM' => $request->namaUKM
    	]);

        $idUKM = UKM::select('idUKM')->where([['namaUKM', $request->namaUKM]])->first();

        User::create([
            'UKM_idUKM' => $idUKM['idUKM'],
            'name' => $request->namaUKM,
            'status' => 'UKM'
        ]);

        return redirect()->secure('bem/ukm');
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
        return back()->with('sukses', "Data UKM dengan id " .$request->editIdUKM. " terupdate");
    }

    public function hapus($idUKM)
    {
        UKM::find($idUKM)->delete();
        return back()->with('sukses', "Data UKM dengan id " .$idUKM. " terhapus");
    }
}
