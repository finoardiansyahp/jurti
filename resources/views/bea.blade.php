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
        @foreach($listbea as $beasiswa)
        <div class="medium-4 large-4 columns">
            <div class="blog-item">
                <img style="height: 210px; width: 500px" src="img/{{$beasiswa->gambar}}" >
                <span class="blue-bg label">{{$beasiswa->judul}}</span>
                <h5>{{$beasiswa->judul}}</h5>
                <p>{{$beasiswa->sedikit}}</p><hr>
                {{$beasiswa->created_at}}
            </div>
        </div>
        @endforeach

    </div>
</div>
<div class="row" id="content">
    <div class="medium-9 columns">
        <div class="blog-post">
            <h3>Beasiswa Bank Indonesia <small>3/6/2017</small></h3>
            <img style="height: 200px; width: 500px" class="thumbnail" src="img/bi.png">
            <p>GenBI - Beasiswa BI 2017/2018 khusus Beasiswa Bank Indonesia 2017 Beasiswa menjadi suatu hal yang paling diinginkan pelajar, tidak terkecuali mahasiswa. Beasiswa merupakan sebuah bantuan yang diberikan oleh lembaga, instansi atau perorangan dengan cara memperingan biaya pendidikan seseorang. Pintar dan berprestasi menjadi syarat mutlak untuk mendapatkan beasiswa. Namun beasiswa sendiri dapat dibedakan menjadi beberapa jenis. <a href="#">Baca selengkapnya...</a></p>

            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Pambudi</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>

        <div class="blog-post">
            <h3>Beasiswa LPDP <small>3/6/2017</small></h3>
            <img class="thumbnail" style="height: 200px; width: 500px" src="img/lpdp.png">
            <p>Akhirnya kabar yang ditunggu ini muncul juga. Beasiswa LPDP 2017 kini resmi dibuka. LPDP menyediakanbeasiswa S2, beasiswa S3 dan sejumlah program beasiswa menarik lainnya. Salah satu beasiswa LPDP yang paling diminati adalah Beasiswa Pendidikan Indonesia(BPI) Program Magister dan Doktoral. Di bawah akan diuraikan bagaimana Anda harus mendaftar beasiswa S2 dan S3 LPDP tersebut. Termasuk dokumen apa saja yang perlu dipersiapkan sebelum mengajukan beasiswa. <a href="#">Baca selengkapnya...</a>
            </p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Pambudi</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>



    </div>
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