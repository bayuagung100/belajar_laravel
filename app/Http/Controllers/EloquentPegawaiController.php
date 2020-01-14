<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EloquentPegawai;

class EloquentPegawaiController extends Controller
{
    //
    public function index()
    {
    	$pegawai = EloquentPegawai::all();
    	return view('eloquent_pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
    	return view('eloquent_pegawai_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);
 
        EloquentPegawai::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/eloquent-pegawai');
    }

    public function edit($id)
    {
        $pegawai = EloquentPegawai::find($id);
        return view('eloquent_pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
        ]);
    
        $pegawai = EloquentPegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/eloquent-pegawai');
    }

    public function hapus($id)
    {
        $pegawai = EloquentPegawai::find($id);
        $pegawai->delete();
        // return redirect('/eloquent-pegawai');

        //mengalihkan ke halaman sebelumnya
        return redirect()->back();
    }
}
