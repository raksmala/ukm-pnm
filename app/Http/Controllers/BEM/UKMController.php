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
    	], [
            'namaUKM.required' => 'Nama UKM Wajib Diisi!'
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

        return back()->with('success', "Berhasil menambahkan UKM dengan nama " .$request->namaUKM. "");
    }

    public function update(Request $request)
    {
        $this->validate($request,[
    		'editIdUKM' => 'required',
    		'editNamaUKM' => 'required',
    		'editEmail' => 'required|unique:users,email',
    		'editUsername' => 'required|unique:users,username',
            'editFoto' => 'required|image'
    	], [
    		'editNamaUKM.required' => 'Nama UKM Wajib Diisi!',
    		'editEmail.required' => 'Email Wajib Diisi!',
            'editEmail.unique' => 'Email Sudah Digunakan!',
    		'editUsername.required' => 'Username Wajib Diisi!',
            'editUsername.unique' => 'Username Sudah Digunakan!',
            'editFoto.required' => 'Logo Wajid Diupload!',
            'editFoto.image' => 'Format Logo Tidak Valid!'
        ]);

        $user = User::where([['UKM_idUKM', $request->editIdUKM]])->first();
        $user->name = $request->editNamaUKM;
        $user->email = $request->editEmail;
        $user->username = $request->editUsername;
        if($request->editPassword != null) 
        {
            $user->password = bcrypt($request->editPassword);
        }
        if($request->editFoto) {
            $foto = $request->file("editFoto");
            $namaFoto = $request->editIdUKM.'.'.$foto->getClientOriginalExtension();
            $pathUpload = 'assets/images/logo/';
            $foto->move($pathUpload, $namaFoto);
            $user->foto = $namaFoto;
        }
        $user->save();
        return back()->with('success', "Data UKM berhasil diupdate");
    }

    public function hapus($idUKM)
    {
        UKM::find($idUKM)->delete();
        return back()->with('success', "Data UKM berhasil dihapus");
    }
}
