<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;
class InfoPrestasiController extends Controller
{
    public function show($id){
        return view('infoprestasi',[
            'prestasi' => Prestasi::find($id)
        ]);
    }


public function prestasi($id)
{
    $prestasi = Prestasi::find($id);
    return view('prestasi/infoprestasi',compact('prestasi'));
}
}
