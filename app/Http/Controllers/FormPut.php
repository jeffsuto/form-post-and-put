<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPut extends Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $data['methodtitle'] = "PUT";
        $data['method'] = method_field('PUT');
        $data['action'] = "/form-put/output";
        return view('/form', $data);
    }

    public function output(Request $request)
    {
        $data['title'] = "Ouput";
        $data['methodtitle'] = "PUT";
        $data['methodtitle'] = "PUT";
        $data['nama'] = $request->input('nama');
        $data['tempat'] = $request->input('tempat_lahir');
        $data['tanggal'] = $request->input('tanggal_lahir');
        $data['sex'] = $request->input('jenis_kelamin');
        $data['email'] = $request->input('email');
        $data['alamat'] = $request->input('alamat');

        return view('/output', $data);
    }
}
