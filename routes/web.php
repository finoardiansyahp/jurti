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
Route::get('', function (){
    return url('/beranda');
});
Auth::routes();

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/percobaan1', function () {
    return view('percobaan1');
});


Route::get('/kegiatanjurti', function () {
    return view('kegiatanjurti');
});

Route::get('/visidanmisi', function () {
    return view('visidanmisi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/kemahasiswaan', function () {
    return view('kemahasiswaan');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/loker', function () {
    return view('loker');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/fasiljur', function () {
    return view('fasiljur');
});

Route::get('/bea', function () {
    return view('bea');
})->name('bea');

Route::get('/dosen1', function () {
    return view('dosen1');
});

Route::get('infobeasiswa/{id}',[
        'uses'=> 'infobeasiswaController@show'
]);

Route::get('infokegiatan/{id}',[
    'uses'=> 'infokegiatanController@show'
]);

Route::get('/test-{id}','InfoKegiatanController@test')->name('test');

Route::get('/dosen1','DosenController@show');
Route::get('/kegiatan','KegiatanController@show');
Route::get('/bea','BeasiswaController@show');