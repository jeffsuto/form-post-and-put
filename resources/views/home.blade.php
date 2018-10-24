@extends('template')

@section('tittle')
    Home
@endsection

@section('content')
    <div class="jumbotron" style="margin-top:20px">
        <h1>Tugas Pertemuan 01</h1>
        <p>Jeffry Suyanto</p>
        <hr>
        <a class="btn btn-info btn-lg" href="/form-post" role="button">Form POST</a>
        <a class="btn btn-primary btn-lg" href="/form-put" role="button">Form PUT</a>
    </div>
@endsection