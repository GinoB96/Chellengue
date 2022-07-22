<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Embarcacion;
use App\Models\Propietario;
use App\Models\Puerto;
use App\Models\tipoEmbarcacion;

class EmbarcacionController extends Controller
{
    public function index(){
        //$totalEmbarcaciones=Embarcacion::orderBy('idEmbarcacion', 'ASC')->get();

        /*
        SELECT matricula,E.nombre,T.nombre as tipoEmbarcacion, CONCAT(P.nombre, " ", P.apellido) as propietario
        FROM embarcacion E, tipoEmbarcacion T, propietario P, embarcacionxpropietario EXP
        WHERE tipoEmbarcacion = T.idTipoEmbarcacion 
            AND EXP.propietario = P.idPropietario
            AND EXP.embarcacion = E.idEmbarcacion

        $dataLibro=$request->all();
        $libros=\DB::table('libro')->select('*')
        ->where('ISBN', '=', $dataLibro)->get();
        */

        $totalEmbarcaciones = DB::select('SELECT idEmbarcacion,matricula,E.nombre,T.nombre as tipoEmbarcacion, CONCAT(P.nombre, " ", P.apellido) as propietario,color,largo,ancho,carga_max FROM embarcacion E, tipoEmbarcacion T, propietario P, embarcacionxpropietario EXP WHERE tipoEmbarcacion = T.idTipoEmbarcacion AND EXP.propietario = P.idPropietario AND EXP.embarcacion = E.idEmbarcacion');
        
        /*
        $totalTipoEmb=tipoEmbarcacion::all();
        $totalPropietario=Propietario::all();
        $totalPuerto=Puerto::all();

        @foreach($totalEmbarcaciones as $amb)
            $amb->propietario=
        @endforeach
        */

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
