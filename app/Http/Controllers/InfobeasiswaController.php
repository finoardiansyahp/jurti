<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class InfobeasiswaController extends Controller
{
    public function show($id){
        return view('beasiswa/infobeasiswa',[
            'beasiswa' => Beasiswa::find($id)
        ]);
    }
}
