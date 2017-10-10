<?php

use Illuminate\Database\Seeder;
use App\Prestasi;
class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestasi::create([
            'id' => '1',

            'judul' => 'Kontes Robot',
            'gambar'=>'getimage.jpg',

            'keterangan' => 'Kontes Robot Pemadam Api Beroda Indonesia (KPAI) yang dilaksanakan 
             pada tanggal 30 April s.d. 2 Mei 2015 di STIKOM Surabaya :<br>
            – Hamas Shofanudin (2014)<br>
            – Shodiq Hermawan (2014)<br>
            – Zainal Arifin (2010)<br>
            – Mukhlas Prastya (2012)<br>',
        ]);
        Prestasi::create([
            'id' => '2',

            'judul' => 'Tim Dalam Suatu Perlombaan Di Malaysia',
            'gambar'=>'rafy.jpg',

            'keterangan' => 'Untuk membuktikan bahwa pendidikan di Negara Indonesia bisa mampu bersaing dengan negara lainnya',
        ]);
        Prestasi::create([
            'id' => '3',

            'judul' => 'Keberhasilan Tim JTIF di Malaysia',
            'gambar'=>'rafy1.jpg',

            'keterangan' => 'Untuk membuktikan bahwa pendidikan di Negara Indonesia bisa mampu bersaing dengan negara lainnya.',
        ]);
    }
}
