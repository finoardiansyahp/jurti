@extends('layouts.master')
@section('content')
    <div class="callout large primary" STYLE="background-color: #ffa500">
        <div class="row column text-center">
            <h3>KEGIATAN JURUSAN TEKNIK INFORMATIKA</h3>
        </div>
    </div>
    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h4>{{ $prestasi->judul }}</h4>
            <img class="thumbnail" src="{{asset ('img/'.$prestasi->gambar)}}">
            <p>{{ $prestasi->keterangan }}</p>
        </div>
    </div>
@endsection