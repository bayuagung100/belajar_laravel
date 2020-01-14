<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    //
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        //mengganti pesan default error
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        ];

        //mengubah pesan default erorrnya dengan variable $messages
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ], $messages);

        //default tanpa mengubah pesan errornya
        // $this->validate($request,[
        //     'nama' => 'required|min:5|max:20',
        //     'pekerjaan' => 'required',
        //     'usia' => 'required|numeric'
        //  ]);

        return view('proses',['data' => $request]);
    }
}
