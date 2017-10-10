 @extends('layouts.master')
 @section('content')

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
      @endsection