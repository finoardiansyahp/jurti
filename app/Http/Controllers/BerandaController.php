<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beranda;

class BerandaController extends Controller
{
    public function show(){
        return view('beranda/beranda',[
            'listberanda' => Beranda::all()
        ]);
    }
}
