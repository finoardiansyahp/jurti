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

            'keterangan' => 'Kontes Robot Pemadam Api Beroda Indonesia (KPAI) yang dilaksanakan 
             pada tanggal 30 April s.d. 2 Mei 2015 di STIKOM Surabaya :
            – Hamas Shofanudin (2014)
            – Shodiq Hermawan (2014)
            – Zainal Arifin (2010)
            – Mukhlas Prastya (2012)',
        ]);
        Prestasi::create([
            'id' => '2',

            'judul' => 'Tim Dalam Suatu Perlombaan Di Malaysia',

            'keterangan' => 'Untuk membuktikan bahwa pendidikan di Negara Indonesia bisa mampu bersaing dengan negara lainnya',
        ]);
        Prestasi::create([
            'id' => '3',

            'judul' => 'Keberhasilan Tim JTIF di Malaysia',

            'keterangan' => 'Untuk membuktikan bahwa pendidikan di Negara Indonesia bisa mampu bersaing dengan negara lainnya.',
        ]);
    }
}
