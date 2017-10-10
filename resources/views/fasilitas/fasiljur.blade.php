@extends('layouts.master')
@section('content')
<div class="callout large primary" STYLE="background-color: #ffa500">
    <div class="row column text-center" >
        <h3>Fasilitas di Jurusan Teknik Informatika</h3>
        <h4>Jurusan Teknik Informatika menyediakan berbagai fasilitas yang dapat dimanfaatkan oleh mahasiswa dalam menunjang jalannya perkulihan.</h4>
        <a href="#foto" style="background-color: #cbb956" class="button small">Foto</a>
    </div>
</div>
<div class="row">
    @foreach($listfasil as $fasilitas)
        <div class="medium-6 columns medium-push-6">
            <img class="thumbnail" src="img/{{$fasilitas->gambar}}">
        </div>
        <div class="medium-6 columns medium-pull-6">
            <h2>{{$fasilitas->judul}}</h2>
            <p>{{$fasilitas->keterangan}}</p>

        </div>
        @endforeach
</div>
{{--<div class="row">
    <div class="medium-4 columns">
        <h3>Kepala Labolatorium</h3>
        <p>Kusworo Anindito, S.T., M.T.</p>
    </div>
    <div class="medium-4 columns">
        <h3>Laboran</h3>
        <p>Yuni Rastanti, S.T., M.T.</p>
    </div>
    <div class="medium-4 columns">
        <h3>Kegiatan</h3>
        <p>Praktikum Jaringan Komputer, Praktikum Aplikasi Mobile, Kuliah Pemrograman Mobile Game, Kuliah Keamanan Jaringan, Kuliah Pemrograman Jaringan, Kuliah Pemrograman Web Lanjut, Kuliah Perangkat Lunak berbasis Teknologi Web, Kelompok Studi Linux, Kelompok Studi Mobile, Pelatihan CISCO, Pelatihan Opensource, Pelatihan Aplikasi Mobile
            dan Pengabdian kepada Masyarakat</p>
    </div>
</div>--}}

<hr>


<div class="row column">
    <h3>Fasilitas Teknik Informatika</h3>
</div>

<div class="foto row medium-up-3 large-up-4" id="foto">
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/jarkom.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/mm.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/rpl.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/jarkom.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/mm.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/rpl.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/jarkom.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/mm.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/rpl.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/jarkom.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/mm.jpg">
    </div>
    <div class="column">
        <img class="thumbnail" style="width: 550px;height: 265px" src="img/rpl.jpg">
    </div>
</div>

<hr>
@endsection