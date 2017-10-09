{{--<!-- Start Top Bar -->--}}
{{--<div class="top-bar">--}}
{{--<div class="row">--}}
{{--<div class="top-bar-left">--}}
{{--<ul class="dropdown menu" data-dropdown-menu>--}}
{{--<li class="menu-text">JURTI</li>--}}
{{--<li><a href="beranda"><i class="fi-list-number"></i> <span>BERANDA</span></a></li>--}}
{{--<li class="has-submenu">--}}
{{--<a href="#">PROFIL</a>--}}
{{--<ul class="submenu menu vertical" data-submenu>--}}
{{--<li><a href="visidanmisi">Visi dan Misi</a></li>--}}
{{--<li><a href="sejarah">Sejarah Teknik Informatika</a></li>--}}
{{--<li><a href="kemahasiswaan">Kemahasiswaan</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="bea">BEASISWA</a></li>--}}
{{--<li><a href="prestasi">PRESTASI</a></li>--}}
{{--<li><a href="loker">LO-KER</a></li>--}}
{{--<li><a href="kegiatanjurti">KEGIATAN</a></li>--}}
{{--<li><a href="fasiljur">FASILITAS</a></li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="top-bar-right">--}}
{{--<ul class="menu">--}}

{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
<!-- End Top Bar -->
@extends('layouts.master')
@section('content')
    <hr>

    <div class="row columns">
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container">
                <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;
                </button>

                <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                <li class="orbit-slide is-active">
                    <img src="{{ asset('img/1.jpg') }}">
                </li>
                <li class="orbit-slide is-active">
                    <img src="{{ asset('img/8.jpg') }}">
                </li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="row column text-center">
        <h1>Do The Best, Nothing Less !!!</h1>
        <p class="lead">Teknik Informatika Universitas Negeri Surabaya</p>
        <!-- <a href="#" class="button large">Learn More</a>
        <a href="#" class="button large hollow">Learn Less</a>
        -->
        <p>Jurusan Teknik INFORMATIKA adalah satu dari lima jurusan yang ada di selingkung Fakultas Teknik (FT)
            Universitas Negeri Surabaya (Unesa). Jurusan Teknik Informatika cikal bakalnya berasal dari jurursan Teknik
            Elektro pada Prodi D3 Manajemen Informatika dan S1 Pendidikan Teknologi nformasi, setelah proses pengajuan
            kepada DIKTI untuk pendirian jurusan Teknik Informatika pada tahun 2012.</p>

    </div>

    <hr>

    <div class="row">
        <div class="text-center medium-6 large-3 columns">
            <h4>D-3 Manajemen Informatika</h4>
            <p>Program Studi D3 Manajemen Informatika mempunyai visi ke depan yaitu menjadi sebuah pusat pendidikan
                keteknikan profesional bidang manajemen informatika untuk menghasilkan lulusan yang siap bersaing di
                dunia kerja.</p>
        </div>
        <div class="text-center medium-6 large-3 columns">
            <h4>S-1 Pendidikan Teknologi Informasi</h4>
            <p>Visi program studi S1 Pendidikan Teknologi Informasi adalah mengembangkan pendidikan kejuruan dalam ilmu
                teknologi informasi serta menjadi pusat studi pendidikan teknologi informasi yang berorientasi
                kewirausahaan.</p>
        </div>
        <div class="text-center medium-6 large-3 columns">
            <h4>S-1 Teknik Informatika</h4>
            <p>Mewujudkan Program Studi yang unggul dalam pengembangan teknologi informasi yang berkarakter dalam skala
                nasional</p>
        </div>
        <div class="text-center medium-6 large-3 columns">
            <h4>S-1 Sistem Informasi</h4>
            <p>Program Studi yang menjadi pusat penelitian dan pengembangan keahlian Sistem Informasi yang unggul secara
                keilmuan dan keahlian teknis yang relevan dengan kebutuhan pasar kerja nasional dan global serta
                berkontribusi di bidang Sistem Informasi Indonesia</p>
        </div>
    </div>

    <hr>

    <div class="row column">
        <div class="callout primary text-center">
            <h3>Gedung B1 Kampus UNESA Ketintang</h3>
            <p>No. Tlp : (031)8299563, No. Fax : (031)8299553</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="large-6 columns">
            <h4>PMW 2017</h4>
            <img class="thumbnail" src="{{ asset('img/2.jpg') }}">
            <p>PMW (Program Mahasiswa Wirausaha) adalah suatu program yang digagas oleh Dikti untuk dikembangkan ke
                dalam kehidupan kampus guna merangsang jiwa enterpreneurship (kewirausahaan) dalam diri mahasiwa.
                Program ini dilaksanakan setiap tahun pada hampir seluruh Universitas negeri dan Swasta di
                Indonesia.</p>
        </div>
        <div class="large-6 columns">
            <h4>X-PROJECT</h4>
            <img class="thumbnail" src="{{ asset('img/3.jpg') }}">
            <p>X-PROJECT 2015 merupakan acara perdana yang diadakan oleh jurusan Teknik Informatika UNESA. Tentu karena
                jurusan Teknik Informatika adalah jurusan yang baru berdiri tahun ini yang terdiri atas 4 program studi.
                Acara ini berlangsung pada Selasa, 22 desember 2015 tepatnya di Gedung B1 Teknik Informatika Unesa
                Ketintang.</p>
        </div>
    </div>

    <hr>
@endsection