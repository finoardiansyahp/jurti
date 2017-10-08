<?php

use Illuminate\Database\Seeder;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loker::create([
            'id' => '1',
            'judul' => 'PMW 2017',
            'keterangan' => 'PMW (Program Mahasiswa Wirausaha) adalah suatu program yang digagas oleh Dikti untuk dikembangkan ke dalam kehidupan kampus guna merangsang jiwa enterpreneurship (kewirausahaan) dalam diri mahasiwa. Program ini dilaksanakan setiap tahun pada hampir seluruh Universitas negeri dan Swasta di Indonesia.',
        ]);

        Loker::create([
            'id' => '2',
            'judul' => 'X-Project',
            'keterangan' => 'X-PROJECT 2015 merupakan acara perdana yang diadakan oleh jurusan Teknik Informatika UNESA. Tentu karena jurusan Teknik Informatika adalah jurusan yang baru berdiri tahun ini yang terdiri atas 4 program studi. Acara ini berlangsung pada Selasa, 22 desember 2015 tepatnya di Gedung B1 Teknik Informatika Unesa Ketintang.',
        ]);
    }
}
