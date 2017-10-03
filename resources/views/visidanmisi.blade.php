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
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">JURTI</li>
                <li><a href="beranda"><i class="fi-list-number"></i> <span>BERANDA</span></a></li>
                <li class="has-submenu">
                    <a href="#">PROFIL</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="visidanmisi">Visi dan Misi</a></li>
                        <li><a href="sejarah">Sejarah Teknik Informatika</a></li>
                        <li><a href="kemahasiswaan">Kemahasiswaan</a></li>
                    </ul>
                </li>
                <li><a href="bea">BEASISWA</a></li>
                <li><a href="prestasi">PRESTASI</a></li>
                <li><a href="loker">LO-KER</a></li>
                <li><a href="kegiatanjurti">KEGIATAN</a></li>
                <li><a href="fasiljur">FASILITAS</a></li>
            </ul>
        </div>

    </div>
</div>

<div class="callout large primary" STYLE="background-color: #ffa500">
    <div class="row column text-center" >
        <h3>VISI DAN MISI</h3>
    </div>
</div>

<!-- We can now combine rows and columns when there's only one column in that row -->
<div class="row medium-8 large-7 columns">
    <div class="blog-post">
        <h3>VISI</h3>
        <p>Mewujudkan Program Studi yang unggul dalam pengembangan teknologi informasi yang berkarakter dalam skala nasional</p>
    </div>

    <div class="blog-post">
        <h3>MISI</h3>
        <p>1. Menyelenggarakan manajemen prodi yang kredibel, akuntabel dan transparan sesuai standar penjaminan mutu.<br>
            2. Menghasilkan lulusan yang berkompeten dan berkarakter.<br>
            3. Melaksanakan penelitian dibidang teknologi informasi dan hasil-hasilnya dipublikasikan minimal ditingkat nasional. <br>
            4. Melaksanakan pengabdian kepada masyarakat dalam menerapkan keilmuannya. <br>
            5. Menjalin kerjasama yang berkelanjutan dengan berbagai instansi dan dunia industri.</p>
    </div>

    <div class="blog-post">
        <h3>TUJUAN</h3>
        <p>1. Terselenggaranya manajemen prodi yang kredibel, akuntabel dan transparan sesuai standar penjaminan mutu;<br>
            2. Menghasilkan lulusan yang memiliki kemampuan professional di bidang teknik informatika untuk menciptakan karya dan mengaplikasikannya di dunia kerja;<br>
            3. Menghasilkan penelitian-penelitian dibidang teknologi informasi dan hasil-hasilnya dipublikasikan minimal ditingkat nasional;<br>
            4. Menghasilkan karya teknologi informasi yang dapat digunakan secara langsung oleh masyarakat;<br>
            5. Terlaksananya kerjasama yang berkelanjutan dengan berbagai instansi dan dunia industri dibidang teknologi informasi.<br>
        </p>
    </div>

    <div class="blog-post">
        <h3>&nbsp;</h3>
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



