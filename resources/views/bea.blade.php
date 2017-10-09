<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 9/20/2017
 * Time: 11:42 PM
 */
?>
        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurusan Teknik Informatika</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="foundation-icons.css/foundation-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="beranda">Beranda</a></li>
            <li><a href="sejarah">Sejarah</a></li>
            <li><a href="kegiatanjurti">Kegiatan</a></li>
            <li><a href="loker">Lo-Ker</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="fasiljur">Fasilitas</a></li>
            <li><a href="bea">Beasiswa</a></li>
            <li><a href="prestasi">Prestasi</a></li>
        </ul>
    </div>
</div>

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
                    <li><a href="{{url('infobeasiswa',[$beasiswa->id])}}">Baca Selengkapnya. . .</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <div class="medium-3 columns" data-sticky-container>
        <div class="sticky" data-sticky data-anchor="content">
            <h4>Kategori</h4>
            <ul>
                <li><a href="#">Beasiswa BI</a></li>
                <li><a href="#">Beasiswa Mandiri</a></li>
                <li><a href="#">Beasiswa PPA</a></li>
                <li><a href="#">Beasiswa LPDP</a></li>
            </ul>
        </div>
    </div>
</div>



<footer>
    <div class="map">
        <div class="row">
            <div class="large-12 columns">
                LOCATE US ON THE MAP <u><a href="https://goo.gl/maps/LL9kfLZzShz" class="lsf-icon" style="font-size:16px" title="Maps"><img src="{{ asset('img/webicon-foursquare-m.png') }}"></a><i class="fi fi-target-two"></i></u>

            </div>
        </div>
    </div>
    <div class="map">
        <div style="background-color:rgba(0,0,0,0.7); min-height:100%; padding:32px; width:100%;">
            <div class="row">
                <div class="large-12 columns">
                    <div class="display-table" style=" width:100%;">
                        <div class="va-align">
                            <h4>TeknikInformatika@gmail.com </h4>
                            1842 Jalan Gajah Mada, St.Independence, Tel Aviv 39337
                            <br> 767-621-0086
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="row">
            <div class="large-12 columns">
                <div class="footer-social">

                    <a href="http://twitter.com/dieterarno" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter"><img src="{{ asset('img/webicon-twitter-m.png') }}"></a>

                    <a href="http://csstemplateheaven.com/csstemplateheaven" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook"><img src="{{ asset('img/webicon-facebook-m.png') }}"></a>

                    <a href="http://if.unesa.ac.id/" class="lsf-icon" style="font-size:16px; margin-right:15px" title="google"><img src="{{ asset('img/webicon-google-m.png') }}"></a>

                    <a href="http://twitter.com/dieterarno" class="lsf-icon" style="font-size:16px" title="instagram"><img src="{{ asset('img/webicon-instagram-m.png') }}"></a>

                </div>
                &copy; 2017 Teknik Informatika.
                <p>Powered by  <span class="black">Education Tim </span> </p>
            </div>
        </div>
    </div>
</footer>



<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>