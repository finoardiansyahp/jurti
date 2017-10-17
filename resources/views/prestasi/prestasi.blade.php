@extends('layouts.master')
@section('content')
<div class="callout large primary" STYLE="background-color: #ffa500">
    <div class="row column text-center" >
        <h3>PRESTASI JURUSAN TEKNIK INFORMATIKA</h3>
    </div>
</div>
@foreach($listprestasi as $prestasi)
    <div class="row medium-8 large-7 columns" >
        <div class="blog-post">
            <h3> {{ $prestasi->judul }} </h3>
            <img class="thumbnail" src="img/{{$prestasi->gambar}}">
            <p>{{ $prestasi->keterangan }}
            </p>
            <a href="{{url('/prestasi-'.$prestasi->id)}}" class="button small">Baca Selengkapnya disini</a>
        </div>
    </div>
@endforeach
@endsection