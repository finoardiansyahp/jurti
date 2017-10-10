<?php

use Illuminate\Database\Seeder;
use App\Fasilitas;
class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fasilitas::create([
            'id' => '101',
            'judul' => 'Labolatorium Jaringan Komputer',
            'gambar' => 'jarkom.jpg',
            'keterangan' => 'Laboratorium ini memberikan pelayanan kepada mahasiswa untuk kegiatan praktikum, tugas akhir, maupun tugas-tugas mata kuliah yang memerlukan fasilitas jaringan komputer. Selain itu juga memberikan pengabdian kepada masyarakat berupa pelatihan-pelatihan komputer dan penelitian-penelitian yang memanfaatkan jaringan komputer. Laboratorium ini diperlengkapi dengan perangkat jaringan dari CISCO, sejumlah handphone (Symbian dan Android), dan sejumlah komputer yang dapat digunakan untuk mengerjakan tugas atau mengakses Internet secara gratis selama tidak digunakan untuk praktikum atau kuliah. 
<br>Kepala Labolatorium
Kusworo Anindito, S.T., M.T.

<br>Laboran
Yuni Rastanti, S.T., M.T.

<br>Kegiatan
Praktikum Jaringan Komputer, Praktikum Aplikasi Mobile, Kuliah Pemrograman Mobile Game, Kuliah Keamanan Jaringan, Kuliah Pemrograman Jaringan, Kuliah Pemrograman Web Lanjut, Kuliah Perangkat Lunak berbasis Teknologi Web, Kelompok Studi Linux, Kelompok Studi Mobile, Pelatihan CISCO, Pelatihan Opensource, Pelatihan Aplikasi Mobile dan Pengabdian kepada Masyarakat',
        ]);

        Fasilitas::create([
            'id' => '102',
            'judul' => 'Labolatorium MultiMedia',
            'gambar' => 'mm.jpg',
            'keterangan' => 'Laboratorium Multimedia salah satu laboratorium yang berada dibawah naungan Jurusan Teknik Informatika. Laboratorium ini bertempat di gedung H5 Fakultas Teknik lantai 2 ruang 211. Laboratorium multimedia ini memiliki daya tampung hingga 34 mahasiswa. Ruang 211 memiliki ukuran yang cukup luas disertai fasilitas AC yang dapat membuat mahasiswa merasa nyaman beraktifitas di laboratorium multimedia. Laboratorium Multimedia memiliki fungsi utama yakni untuk kegiatan praktik dari teori yang telah didapatkan dari perkuliahan teori. Alat pendukung juga disediakan untuk menunjang fungsi dari laboratorium ini dan kegiatan pembelajaran yang ada didalamnya. Alat pendukung yang disediakan seperti : Personal Computer, Router, Switch, Access Point, LCD Projector, White Board. Selain alat, terdapat juga software yang telah terinstal dalam setiap komputer seperti : Adobe Photoshop, Corel Draw, Camtasia Studio, Polycom PPX dan software-software sejenis. Laboratorium ini juga digunakan untuk kegiatan akademik lainnya.
           <br><br> Dosen :
            Made Wirawan, S.T., S.S.T., M.T.
            Muhammad Iqbal Akbar, S.ST., M.MT.
            <br><br>Laboran :
            Firdaus Aslamy, A.Md.
            <br><br>Software : Kamtasia Studio, Audacity, VLC Player, Adobe Master Collection, Master CV, Macromedia Flash, Movie Maker, Photoshop, Corel Draw, Polycom PPX,
            Access Point, 
            Free Wifi, 
            Internet, 
            Kabel LAN, 
            AC, 
            LCD Proyektor, 
            PC, 
            Stop Kontak',

        ]);

        Fasilitas::create([
            'id' => '103',
            'judul' => 'Labolatorium Aplikasi Web dan Game',
            'gambar' => 'rpl.jpg',
            'keterangan' => 'Laboratorium Aplikasi Web dan Game merupakan salah satu laboratorium yang berada di bawah naungan Jurusan Teknik Informatika. Laboratorium dikhususkan pada bidang pembuatan dan pengembangan website dan aplikasi game. Laboratorium ini bertempat di gedung H5 lantai 2 ruang 213. Laboratorium ini memiliki daya tampung 30 s.d 40 mahasiswa. Dengan ukuran ruang cukup luas serta dilengkapi dengan AC dan sirkulasi udara membuat mahasiswa menjadi nyaman untuk beraktifitas di laboratorium ini. Fungsi utama laboratorium aplikasi website dan game adalah untuk kegiatan praktikum atas teori yang sudah didapat dalam perkuliahan teori. Adapun kegiatan praktikum yang dilaksanakan, antara lain: HTML, PHP, desain web responsif, integrasi DBMS pada web, manipulasi data, development game android, dan lain sebagainya mengenai pembuatan aplikasi mobile (android). Selain untuk kegiatan praktikum, laboratorium ini juga digunakan untuk kegiatan pengerjaan skripsi/tugas akhir, diskusi, simulasi, pelatihan, dan penelitian terkait.
            <br><br>Koordinator Lab : Didik Dwi Prasetya, S. T., M. T.
            <br> <br>Dosen:
            Didik Dwi Prasetya, S. T., M. T.
            Azhar Ahmad Smaradigna, S. Pd., M. Pd.
            <br><br>Laboran:
            Firdaus Aslamy, A. Md.

            <br>A. Hardware: 
               Personal Computer, 
                LCD Proyektor, 
                Jaringan Internet.
            <br>B. Software: 
             Apache Web Server(Xampp), 
             PHP Engine, 
             Mysql Server, 
             PostgreSQL, 
             Notepad++, 
             Eclipse, 
             Intel XDK, 
             SDK Android, 
            Java SDK, 
             Phonegap SDK, 
             Jquery Mobile.',
        ]);

        Fasilitas::create([
            'id' => '104',
            'judul' => 'Ruang Kuliah',
            'gambar' => 'kelas.jpg',
            'keterangan' => 'Ruang Kuliah salah satu ruangan yang berada dibawah naungan Jurusan Teknik Informatika. Ruang kuliah ini bertempat di gedung H5 Fakultas Teknik lantai 2 ruang 201,202,203,204,205. Ruang Kuliah ini memiliki daya tampung hingga 34 mahasiswa. Ruangannya memiliki ukuran yang cukup luas disertai fasilitas AC yang dapat membuat mahasiswa merasa nyaman beraktifitas di kelas. Ruang kuliah memiliki fungsi utama yakni untuk kegiatan kuliah yang hanya teori tanpa praktikum. Alat pendukung juga disediakan untuk menunjang fungsi dari laboratorium ini dan kegiatan pembelajaran yang ada didalamnya. Alat pendukung yang disediakan seperti : Personal Computer, Router, Switch, Access Point, LCD Projector, White Board. Selain alat, terdapat juga software yang telah terinstal dalam setiap komputer seperti : Adobe Photoshop, Corel Draw, Camtasia Studio, Polycom PPX dan software-software sejenis. Laboratorium ini juga digunakan untuk kegiatan akademik lainnya.',
        ]);
    }
}
