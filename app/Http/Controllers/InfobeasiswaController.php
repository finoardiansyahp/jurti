<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class InfobeasiswaController extends Controller
{
    public function show($id){
        return view('infobeasiswa',[
            'beasiswa' => Beasiswa::find($id)
        ]);
    }

    public function beasiswa($id)
    {
        $beasiswa = Beasiswa::find($id);
        return view('beasiswa/infobeasiswa',compact('beasiswa'));
    }
}
