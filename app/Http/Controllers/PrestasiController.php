<?php

namespace App\Http\Controllers;

use App\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function show(){
        return view('prestasi/prestasi',[
            'listprestasi' => Prestasi::all()
        ]);
    }
}
