<?php

use Illuminate\Database\Seeder;
use App\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'id' => '196004041987011001',
            'nama' => 'Prof. Dr. Ekohariadi, M.Pd',
            'foto' => 'ekohariadi.jpg',
            'jabatan' => Dosen::JABATAN[0],


        ]);
        Dosen::create([
            'id' => '196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'foto' => 'bambang.png',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '196812171994032002',
            'nama' => 'Rina Harimurti, S.Pd.,MT',
            'foto' => 'Rina.png',
            'jabatan' => Dosen::JABATAN[1],
        ]);
        Dosen::create([
            'id' => '196105151986012001',
            'nama' => 'Dr. MEINI SONDANG SUMBAWATI, M.Pd.',
            'foto' => 'cewek.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '196901251995122001',
            'nama' => 'Anita Qoiriah, S.Kom., M.Kom',
            'foto' => 'anita.jpg',
            'jabatan' => Dosen::JABATAN[2],
        ]);
        Dosen::create([
            'id' => '197411012003121001',
            'nama' => 'Aditya Prapanca, ST. M.Kom',
            'foto' => 'adit.jpg',
            'jabatan' => Dosen::JABATAN[7],
        ]);
        Dosen::create([
            'id' => '197702032005012001',
            'nama' => 'Wiyli Yustanti, S.Si. M.Kom',
            'foto' => 'wiyly.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '197512032005012001',
            'nama' => 'NAIM ROCHMAWATI ,S.Kom. MT.',
            'foto' => 'naim.png',
            'jabatan' => Dosen::JABATAN[9],
        ]);
        Dosen::create([
            'id' => '197908062006041001',
            'nama' => 'Agus Prihanto, ST. M.Kom',
            'foto' => 'agus.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '197506022003122001',
            'nama' => 'Yuni Yamasari, S.Kom., M.Kom',
            'foto' => 'yamasari.png',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '198004122006042002',
            'nama' => 'ARIES DWI INDRIYANTI, S.Kom.,M.Kom.',
            'foto' => 'cewek.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '197303302006041001',
            'nama' => 'Ari Kurniawan, S.Kom.,MT',
            'foto' => 'ari.jpg',
            'jabatan' => Dosen::JABATAN[10],
        ]);
        Dosen::create([
            'id' => '197912062008011011',
            'nama' => 'Dedy Rahman Prehanto. S.Kom M.Kom',
            'foto' => 'Dedy.png',
            'jabatan' => Dosen::JABATAN[10],
        ]);
        Dosen::create([
            'id' => '197810272008121002',
            'nama' => 'ANDI IWAN NURHIDAYAT, S.Kom.,M.T.',
            'foto' => 'andi.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '198211022008121001',
            'nama' => 'SALAMUN ROHMAN NUDIN, S.Kom.,M.Kom.',
            'foto' => 'salamun.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '197701102008121003',
            'nama' => 'ASMUNIN , S.Kom.',
            'foto' => 'asmunin.png',
            'jabatan' => Dosen::JABATAN[4],
        ]);
        Dosen::create([
            'id' => '198003252008121001',
            'nama' => 'I GUSTI LANANG P.E.P., S.Kom., M.Kom.',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[13],
        ]);
        Dosen::create([
            'id' => '197912202008121001',
            'nama' => 'DWI FATRIANTO SUYATNO ,S.Kom.,M.Kom.',
            'foto' => 'Dwi.jpg',
            'jabatan' => Dosen::JABATAN[6],
        ]);
        Dosen::create([
            'id' => '198102212008122001',
            'nama' => 'ARDHINI WARIH UTAMI, S.Kom., M.Kom',
            'foto' => 'ardhini.png',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '197905082009121001',
            'nama' => 'Setya Chendra Wibawa, S.Pd, MT',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[5],
        ]);
        Dosen::create([
            'id' => '1112',
            'nama' => 'Yeni Anistyasari, S.Pd. M.Kom',
            'foto' => 'yeni.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '198104142009121004',
            'nama' => 'I KADEK DWI NURYANA ,S.T., M.Kom.',
            'foto' => 'kadek.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '0716018704',
            'nama' => 'Ricky Eka Putra, S.Kom. M.Kom',
            'foto' => 'riki.jpg',
            'jabatan' => Dosen::JABATAN[8],
        ]);
        Dosen::create([
            'id' => '1111',
            'nama' => 'Ibnu Febry Kurniawan, S.Kom, M.Sc',
            'foto' => 'ibnu.png',
            'jabatan' => Dosen::JABATAN[11],
        ]);
        Dosen::create([
            'id' => '1113',
            'nama' => 'Wuri Handayani, S.H.',
            'foto' => 'cewek.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
        Dosen::create([
            'id' => '1114',
            'nama' => 'Ratna Prahastuti',
            'foto' => 'cewek.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
        Dosen::create([
            'id' => '1115',
            'nama' => 'Benny Yulianto',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
        Dosen::create([
            'id' => '1116',
            'nama' => 'Dodik Arwin D., SST,MT',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
        Dosen::create([
            'id' => '1117',
            'nama' => 'Sholikhun, ST.',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
        Dosen::create([
            'id' => '1118',
            'nama' => 'Sugianto, AMd.',
            'foto' => 'cowok.jpg',
            'jabatan' => Dosen::JABATAN[14],
        ]);
    }
}
