<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'Kegiatan';

    protected $primaryKey = 'id_kegiatan';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name','nama','keterangan','gambar'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','nip')->first();
    }
}
