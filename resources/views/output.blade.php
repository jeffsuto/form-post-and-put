@extends('templates.main')

@section('title')
    {{$title}}
@endsection

@section('content') 
    <div class="panel panel-default col-md-8 col-md-offset-2" style="margin-top:10px">
        <div class="panel-body" style="margin-top:10px">
            <div class="form-group">
                <label class="control-label col-md-4">Nama</label>
                <p>: {{ @$nama }}</p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Tempat Lahir</label>
                <p>: {{ @$tempat}}</p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Tanggal Lahir</label>
                <p>: {{ @$tanggal}}</p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Jenis Kelamin</label>
                <p>: {{ @$sex}}</p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Email</label>
                <p>: {{ @$email}}</p>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-4">Alamat</label>
                <p>: {{ @$alamat}}</p>
            </div>
        </div>
    </div>
@endsection