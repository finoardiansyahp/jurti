<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
class InfoKegiatanController extends Controller
{
    public function show($id){
        return view('infokegiatan',[
            'kegiatan' => Kegiatan::find($id)
        ]);
    }

    public function test($id)
    {
        $test = Kegiatan::find($id);
        return view('infokegiatan',compact('test'));
    }
}
