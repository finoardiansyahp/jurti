<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'judul','kegiatan','gambar'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id')->first();
    }
}
