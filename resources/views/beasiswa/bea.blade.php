@extends('layouts.master')
@section('content')

<div class="blog">
    <h3 class="text-center"> Raih kesempatan untuk dapat <span class="orange"> <b> Beasiswa </b></span></h3>
    <div class="row">
        <div class="medium-4 large-4 columns">
            <div class="blog-item">
                <img style="height: 210px; width: 500px" src="img/bi.png" >
                <span class="blue-bg label">Beasiswa Bank Indonesia</span>
                <h5>Beasiswa Bank Indonesia</h5>
                <p>Beasiswa BI 2017/2018 khusus Beasiswa Bank Indonesia 2017 Beasiswa menjadi suatu hal yang paling diinginkan pelajar, tidak terkecuali mahasiswa. Beasiswa merupakan sebuah bantuan yang diberikan oleh lembaga, instansi atau perorangan dengan cara memperingan biaya pendidikan seseorang. Pintar dan berprestasi menjadi syarat mutlak untuk mendapatkan beasiswa</p><hr>
            </div>
        </div>
        <div class="medium-4 large-4 columns">
            <div class="blog-item">
                <img style="height: 210px; width: 500px" src="img/ppa.jpg" >
                <span class="blue-bg label">Beasiswa PPA</span>
                <h5>Beasiswa PPA</h5>
                <p>Beragam beasiswa kuliah bisa Anda coba untuk mendanai kebutuhan studi yang membebani di 2017. Peluang beasiswa itu ada yang ditujukan bagi pelamar yang baru akan kuliah atau mereka yang saat ini sedang menjalani studi (on going). Nah, peluang beasiswa satu ini ditujukan bagi Anda yang sudah berstatus mahasiswa, baik yang tengah kuliah di perguruan tinggi negeri (PTN) atau pun perguruan tinggi swasta (PTS).</p><hr>
            </div>
        </div>
        <div class="medium-4 large-4 columns">
            <div class="blog-item">
                <img style="height: 210px; width: 500px" src="img/lpdp.png" >
                <span class="blue-bg label">Beasiswa LPDP</span>
                <h5>Beasiswa LPDP</h5>
                <p>Beasiswa Magister & Doktor dari LPDP (Lembaga Pengelola Dana Pendidikan) Sasaran bantuan program beasiswa ini adalah Warga Negara Indonesia yang berkemampuan akademik dan kepemimpinan yang tinggi dan lolos proses seleksi untuk melaksanakan studi pada program Magister dan Doktor.</p><hr>
            </div>
        </div>
    </div>
</div>

<div class="row" id="content">
    @foreach($listbea as $beasiswa)
    <div class="medium-9 columns">
        <div class="blog-post">
            <h3>{{$beasiswa->judul}}<small>  {{$beasiswa->created_at}}</small></h3>
            <img style="height: 200px; width: 500px" class="thumbnail" src="img/{{$beasiswa->gambar}}">
            <p style="max-height: 100px; overflow: hidden">{{$beasiswa->keterangan}}</p>

            <div class="callout">
                <ul class="menu simple">
                    <li><a href="{{url('infobeasiswa',[$beasiswa->id=''])}}">Baca Selengkapnya. . .</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <div class="medium-3 columns" data-sticky-container>
        <div class="sticky" data-sticky data-anchor="content">
            <h4>Kategori</h4>
            <ul>
                <li><a href="{{url('infobeasiswa',[$beasiswa->id])}}">Beasiswa BI</a></li>
                <li><a href="#">Beasiswa Mandiri</a></li>
                <li><a href="#">Beasiswa PPA</a></li>
                <li><a href="#">Beasiswa LPDP</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection