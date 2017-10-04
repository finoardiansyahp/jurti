<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    const JABATAN = [
        'Dekan', //0
        'Ketua Jurusan', //1
        'Sekretaris Jurusan',//2
        'Pembina Kemahasiswaan', //3
        'Kaprodi D3 Manajemen Informatika', //4
        'Kaprodi S1 Pendidikan Teknologi Informasi', //5
        'Kaprodi S1 Sistem Informasi',//6
        'Kaprodi S1 Teknik Informatika',//7
        'Unit Penunjang',//8
        'Ketua Lab',//9
        'Ketua Lab Rekayasa Perangkat Lunak',//10
        'Ketua Lab Multimedia Kreatif',//11
        'Ketua Lab Sistem Informasi',//12
        'Ketua Lab Jaringan',//13
        'Staf Pelaksana'//14
    ];
    protected $table = 'dosen';

    protected $primaryKey = 'nip';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name','user','jabatan','foto'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','nip')->first();
    }
}

