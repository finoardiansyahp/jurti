<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
class FasilitasController extends Controller
{
    public function show(){
        return view('fasilitas/fasiljur',[
            'listfasil' => Fasilitas::all()
        ]);
    }
}
