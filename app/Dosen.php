<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
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
