<?php

namespace App\Http\Controllers;
use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function show(){
        return view('kegiatan',[
            'listkegiatan' => Kegiatan::all()
        ]);
    }
}
