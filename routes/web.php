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
    return redirect('beranda');
});
Auth::routes();

Route::get('/beranda', function () {
    return view('beranda/beranda');
});

Route::get('/percobaan1', function () {
    return view('percobaan1');
});


Route::get('/kegiatanjurti', function () {
    return view('kegiatanjurti');
});

Route::get('/visidanmisi', function () {
    return view('profil/visidanmisi');
});

Route::get('/sejarah', function () {
    return view('profil/sejarah');
});

Route::get('/kemahasiswaan', function () {
    return view('profil/kemahasiswaan');
});

Route::get('/prestasi', function () {
    return view('prestasi/prestasi');
});
Route::get('/loker', function () {
    return view('loker/loker');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/fasiljur', function () {
    return view('fasilitas/fasiljur');
});

Route::get('/bea', function () {
    return view('bea');
})->name('bea');

Route::get('/dosen1', function () {
    return view('profil/dosen1');
});

Route::get('infobeasiswa/{id}',[
    'uses'=> 'infobeasiswaController@show'
]);


Route::get('infokegiatan/{id}',[
    'uses'=> 'infokegiatanController@show'
]);

Route::get('/test-{id}','InfoKegiatanController@test')->name('test');
Route::get('/prestasi-{id}','InfoPrestasiController@prestasi')->name('prestasi');
Route::get('/dosen1','DosenController@show');
Route::get('/kegiatan','KegiatanController@show');
Route::get('/bea','BeasiswaController@show');
Route::get('/fasiljur','FasilitasController@show');
Route::get('/prestasi','PrestasiController@show');
Route::get('/loker','LokerController@show');
Route::get('/beranda','BerandaController@show');
Route::get('/beasiswa-{id}','InfobeasiswaController@beasiswa')->name('beasiswa');
