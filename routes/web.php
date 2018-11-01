<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FormPost@index');

Route::get('/form-post', 'FormPost@index');
Route::post('/form-post/output', 'FormPost@output');

Route::get('/form-put', 'FormPut@index');
Route::put('/form-put/output', 'FormPut@output');