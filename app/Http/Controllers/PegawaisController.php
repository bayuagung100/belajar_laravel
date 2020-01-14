<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Pegawai;

class PegawaisController extends Controller
{
    //
    public function index()
    {
    	// mengambil semua data pegawai
        // $pegawai = Pegawai::all();
        
        // mengambil data pegawai yang pertama
        // $pegawai = Pegawai::first(); 
        
        // mengambil data pegawai yang id nya 1
	    // $pegawai = Pegawai::find(1);
 
        // mengambil data pegawai yang bernama Radit Prakasa
        // $pegawai = Pegawai::where('nama', 'Radit Prakasa')->get();

        // mengambil data pegawai yang bernama Radit Prakasa
        // $pegawai = Pegawai::where('nama', '=' , 'Radit Prakasa')->get();

        // mengambil data pegawai yang di namanya ada huruf a 
        // $pegawai = Pegawai::where('nama', 'like' , '%a%')->get();
    
        // menampilkan 5 data pegawai per halaman
        $pegawai = Pegawai::paginate(5);
        
    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
}
