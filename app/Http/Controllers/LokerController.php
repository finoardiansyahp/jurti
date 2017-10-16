<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loker;
class LokerController extends Controller
{
    public function show(){
        return view('loker/loker',[
            'listloker' => Loker::all()
        ]);
    }
}
