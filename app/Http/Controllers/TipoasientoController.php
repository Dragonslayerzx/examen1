<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipoasiento;
use App\Models\Vuelo;
use App\Models\VuelosAsiento;

class TipoasientoController extends Controller
{
    //
    public function index(){
        $tipoasiento = Tipoasiento::all();
        return view("tiposAsientos", compact('tipoasiento'));
    }

    public function add(){
        return view("agregarTipoAsiento");
    }

    public function save(Request $request){    
        
    }                   
}
