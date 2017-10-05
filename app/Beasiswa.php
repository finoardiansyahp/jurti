<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{

    protected $table = 'beasiswa';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'judul','keterangan','gambar'
    ];
}
