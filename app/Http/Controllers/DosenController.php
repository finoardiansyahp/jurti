<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function show(){
        return view('profil/dosen1',[
            'listdosen' => Dosen::all()
        ]);
    }
}
