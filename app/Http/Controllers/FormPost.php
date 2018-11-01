<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPost extends Controller
{
    public function index()
    {
        $data['title'] = "Form Method POST";
        $data['methodtitle'] = "POST";
        $data['method'] = '';
        $data['action'] = "/form-post/output";
        return view('/form', $data);
    }

    public function output(Request $request)
    {
        $data['title'] = "Output Form Method POST";
        $data['method'] = "POST";
        $data['nama'] = $request->nama;
        $data['tempat'] = $request->tempat_lahir;
        $data['tanggal'] = $request->tanggal_lahir;
        $data['sex'] = $request->jenis_kelamin;
        $data['email'] = $request->email;
        $data['alamat'] = $request->alamat;

        return view('/output', $data);
    }
}
