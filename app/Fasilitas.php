<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'judul','keterangan','gambar'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id')->first();
    }
}
