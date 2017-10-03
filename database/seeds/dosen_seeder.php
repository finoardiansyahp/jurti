<?php

use Illuminate\Database\Seeder;
use App\dosen;
class dosen_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dosen::create([
           'nip' => '1234567',
        'nama' => 'Prof. Dr. Ekohariadi, M.Pd',
        'jabatan' => 'Dekan Fakultas',

            'nip' => '	196004041987011001',
            'nama' => 'Prof. Dr. Ekohariadi, M.Pd',
            'jabatan' => 'Dosen',

            'nip' => '	196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jabatan' => 'Dosen',

            'nip' => '	196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jabatan' => 'Dosen',

            'nip' => '	196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jabatan' => 'Dosen',

            'nip' => '	196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jabatan' => 'Dosen',

            'nip' => '	196505191992021001',
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jabatan' => 'Dosen',
            ]);
    }
}
