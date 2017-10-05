<?php

use Illuminate\Database\Seeder;
use App\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beasiswa::create([
            'id' => '1',

            'judul' => 'Beasiswa Bank Indonesia',

            'keterangan' => 'GenBI - Beasiswa BI 2017/2018 khusus Beasiswa Bank Indonesia 2017 Beasiswa menjadi suatu hal yang paling diinginkan pelajar, tidak terkecuali mahasiswa. Beasiswa merupakan sebuah bantuan yang diberikan oleh lembaga, instansi atau perorangan dengan cara memperingan biaya pendidikan seseorang. Pintar dan berprestasi menjadi syarat mutlak untuk mendapatkan beasiswa. Namun beasiswa sendiri dapat dibedakan menjadi beberapa jenis.',

        ]);
    }
}
