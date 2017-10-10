<?php

use Illuminate\Database\Seeder;
use App\Kegiatan;
class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
            'id' => '100',

            'judul' => 'Bulutangkis JurTI',
            'gambar' => 'bultang.jpg',

            'keterangan' => 'Diadakannya kegiatan bulutangkis,agar dapat mengisi waktu luang dan bisa mengurangi hal negatif yang ada dikalangan remaja sekarang.',
        ]);
        Kegiatan::create([
            'id' => '101',

            'judul' => 'Futsal JurTI',
            'gambar' => 'futsal.jpg',

            'keterangan' => 'Diadakannya kegiatan futsal,agar dapat mengisi waktu luang dan bisa mengurangi hal negatif yang ada dikalangan remaja sekarang.',
        ]);
        Kegiatan::create([
            'id' => '102',

            'judul' => 'Volly JurTI',
            'gambar' => 'volley.jpg',

            'keterangan' => 'Diadakannya kegiatan volly,agar dapat mengisi waktu luang dan bisa mengurangi hal negatif yang ada dikalangan remaja sekarang.',
        ]);
        Kegiatan::create([
            'id' => '103',

            'judul' => 'Seminar Nasional "BIG DATA" JurTI',
            'gambar' => 'bigdata.jpg',

            'keterangan' => 'Diadakannya kegiatan seminar nasional "BIG DATA",agar dapat mengisi waktu luang dan bisa mengurangi hal negatif yang ada dikalangan remaja sekarang.',
        ]);
    }
}
