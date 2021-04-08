<?php

namespace App\Http\Controllers\BEM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UKM;
use App\User;

class UKMController extends Controller
{
    public function index() 
    {
        $ukm = UKM::select('*')->where([['idUKM', '!=', '1']])->get();
        return view('/bem/ukm', ['ukm' => $ukm]);
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

        return redirect('bem/ukm');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdUKM' => 'required',
    		'editNamaUKM' => 'required',
    		'editEmail' => 'required',
    		'editUsername' => 'required',
    		'editFoto' => 'required'
    	]);

        $foto = $request->file("editFoto");
        $namaFoto = $request->editIdUKM.'.'.$foto->getClientOriginalExtension();
        $pathUpload = 'assets/images/logo/';

        $user = User::where([['UKM_idUKM', $request->editIdUKM]])->first();
        $user->name = $request->editNamaUKM;
        $user->email = $request->editEmail;
        $user->username = $request->editUsername;
        if($request->editPassword != null) 
        {
            $user->password = bcrypt($request->editPassword);
        }
        $foto->move($pathUpload, $namaFoto);
        $user->foto = $namaFoto;
        $user->save();
        return back()->with('success', "Data UKM dengan id " .$request->editIdUKM. " terupdate");
    }

    public function hapus($idUKM)
    {
        UKM::find($idUKM)->delete();
        return back()->with('success', "Data UKM dengan id " .$idUKM. " terhapus");
    }
}
