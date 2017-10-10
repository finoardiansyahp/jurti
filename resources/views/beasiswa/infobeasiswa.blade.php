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
            <li><a href="{{ url('/beranda') }}">Beranda</a></li>
            <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
            <li><a href="{{ url('/kegiatanjurti') }}">Kegiatan</a></li>
            <li><a href="{{ url('/loker')}}">Lo-Ker</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="{{ url('/fasiljur') }}">Fasilitas</a></li>
            <li><a href="{{ url('/bea') }}">Beasiswa</a></li>
            <li><a href="{{ url('/prestasi')}}">Prestasi</a></li>
        </ul>
    </div>
</div>

{{--<div class="row" id="content">--}}
<div class="row medium-8 large-7 columns">
<div class="blog">

    <h3 class="text-center"><span>{{$beasiswa->judul}}</span></h3>
    <center><img src="{{asset ('img/'.$beasiswa->gambar)}}" style="object-fit:cover"  width="600px" height="200px"></center>
    <br>
    <p style="text-align: justify">{!!$beasiswa->keterangan!!}</p>

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