<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class NotifController extends Controller
{
    //
    public function index(){
        return view('notifikasi');
    }

    public function sukses(){
        Session::flash('sukses','ini notif sukses');
        return redirect('pesan');
    }

    public function peringatan(){
        Session::flash('peringatan','ini notif peringatan');
        return redirect('pesan');
    }

    public function gagal(){
        Session::flash('gagal','ini notif gagal');
        return redirect('pesan');
    }
}
