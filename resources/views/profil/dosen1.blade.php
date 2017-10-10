<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 9/22/2017
 * Time: 4:22 PM
 */
?>
        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JURTI</title>
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
            <li><a href="profil">Sejarah</a></li>
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

<div class="callout large primary" STYLE="background-color: #ffa500">
    <div class="row column text-center" >
        <h3>Daftar Nama Dosen Jurusan Teknik Informatika</h3>
    </div>
</div>

<!-- We can now combine rows and columns when there's only one column in that row -->
<div class="row" id="content">
    <div class="medium-9 columns">
        @foreach($listdosen as $dosen)
            <div class="small-6 columns">
                <figure class="label-info">
                    <img src="img/{{$dosen->foto}}" width="200px" height="210px" alt=""/>
                    <figcaption>
                        <label>NIP</label>
                        <p>{{ $dosen->id }}</p>
                        <label>Nama</label>
                        <p>{{ $dosen->nama }}</p>
                        <label>Jabatan</label>
                        <p>{{ $dosen->jabatan }}</p>
                    </figcaption>
                </figure>
            </div>
        @endforeach
            </div>
    <div class="medium-3 columns" data-sticky-container>
        <div class="sticky" data-sticky data-anchor="content">
            <h4>Profil</h4>
            <ul>
                <li><a href="profil">Sejarah</a></li>
                <li><a href="kemahasiswaan">Kemahasiswaan</a></li>
                <li><a href="dosen1">Data Dosen</a></li>
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



