<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Embarcacion;
use App\Models\Propietario;
use App\Models\Puerto;

class EmbarcacionController extends Controller
{
    public function index(){
        $totalEmbarcaciones=Embarcacion::orderBy('idEmbarcacion', 'ASC')->get();
        $totalPropietario=Propietario::all();
        $totalPuerto=Puerto::all();

        

        return view('embarcacion.embarcaciones', compact('totalEmbarcaciones'));
    }

    public function create(){

    }

    public function show(){

    }

    public function delete(){

    }

    public function update(){
        
    }
}
