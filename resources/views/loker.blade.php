<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 9/23/2017
 * Time: 6:31 PM
 */
?>
        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To JTIF</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="foundation-icons.css/foundation-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- Start Top Bar -->
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
    <div class="top-bar-right">
        <ul class="menu">

        </ul>
    </div>
</div>
<!-- End Top Bar -->

<div class="callout large primary" STYLE="background-color: #ffa500">
    <div class="row column text-center">
        <h1>Lowongan Pekerjaan</h1>
    </div>
</div>

<hr>

<div class="row" id="content">
    <div class="medium-8 columns">
        <div class="blog-post">
            <h3>GoJek <small>3/6/2015</small></h3>
            <img class="thumbnail" src="{{ asset('img/4.jpg') }}">
            <p>Bermula di tahun 2010 sebagai perusahaan transportasi roda dua melalui panggilan telepon, GO-JEK kini telah tumbuh menjadi perusahaan penyedia layanan transportasi dan gaya hidup berbasis aplikasi.</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="blog-post">
            <h3>Tokopedia <small>3/6/2015</small></h3>
            <img class="thumbnail" src="{{ asset('img/5.jpg') }}">
            <p>Dimulai dari Tokopedia, siapa pun dapat memenuhi semua kebutuhan hariannya dalam satu tempat, sekaligus dapat membangun bisnis secara mudah dan gratis.</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="blog-post">
            <h3>BukaLapak <small>3/6/2015</small></h3>
            <img class="thumbnail" src="{{ asset('img/6.jpg') }}">
            <p>Bukalapak.com adalah sarana jual/beli online di Indonesia yang paling nyaman & aman. Didirikan pada tahun 2010 oleh anak-anak muda Indonesia yang ingin membantu mengembangkan UMKM di Indonesia untuk meningkatkan kesejahteraan masyarakat. Kini Bukalapak.com memiliki lebih dari 100 ribu penjual dan 700 ribu barang. Kategori produk yang dimiliki Bukalapak.com pun beraneka-ragam.</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="blog-post">
            <h3>Shopee <small>3/6/2015</small></h3>
            <img class="thumbnail" src="{{ asset('img/7.jpg') }}">
            <p>Shopee hadir di Indonesia untuk membawa pengalaman berbelanja baru. Kami memfasilitasi penjual untuk berjualan dengan mudah serta membekali pembeli dengan proses pembayaran yang aman dan pengaturan logistik yang terintegrasi!</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="medium-3 columns" data-sticky-container>
        <div class="sticky" data-sticky data-anchor="content">
            <h4>Quote</h4>
            <ul>
                <p>Tekat Kuat Pasti Dapat Meraih Yang diinginkan</p>
            </ul>
        </div>
    </div>
</div>

<div class="row column">
    <ul class="pagination" role="navigation" aria-label="Pagination">
        <li class="disabled">Previous</li>
        <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
        <li><a href="#" aria-label="Page 2">2</a></li>
        <li><a href="#" aria-label="Page 3">3</a></li>
        <li><a href="#" aria-label="Page 4">4</a></li>
        <li class="ellipsis"></li>
        <li><a href="#" aria-label="Page 12">12</a></li>
        <li><a href="#" aria-label="Page 13">13</a></li>
        <li><a href="#" aria-label="Next page">Next</a></li>
    </ul>
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




