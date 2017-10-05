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
            'judul' => 'Lab Jaringan Komputer',
            'keterangan' => 'Laboratorium ini memberikan pelayanan kepada mahasiswa untuk kegiatan praktikum, tugas akhir, maupun tugas-tugas mata kuliah yang memerlukan fasilitas jaringan komputer. Selain itu juga memberikan pengabdian kepada masyarakat berupa pelatihan-pelatihan komputer dan penelitian-penelitian yang memanfaatkan jaringan komputer. Laboratorium ini diperlengkapi dengan perangkat jaringan dari CISCO, sejumlah handphone (Symbian dan Android), dan sejumlah komputer yang dapat digunakan untuk mengerjakan tugas atau mengakses Internet secara gratis selama tidak digunakan untuk praktikum atau kuliah. 
Kepala Labolatorium
Kusworo Anindito, S.T., M.T.

Laboran
Yuni Rastanti, S.T., M.T.

Kegiatan
Praktikum Jaringan Komputer, Praktikum Aplikasi Mobile, Kuliah Pemrograman Mobile Game, Kuliah Keamanan Jaringan, Kuliah Pemrograman Jaringan, Kuliah Pemrograman Web Lanjut, Kuliah Perangkat Lunak berbasis Teknologi Web, Kelompok Studi Linux, Kelompok Studi Mobile, Pelatihan CISCO, Pelatihan Opensource, Pelatihan Aplikasi Mobile dan Pengabdian kepada Masyarakat',
        ]);
    }
}
