@extends('layouts.plantilla')

@section('content')
    <div class="container mt-3">
        <h2>Embarcaciones</h2>         
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Tipo de embarcacion</th>
                    <th>Propietario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($totalEmbarcaciones as $emb)
                <tr>
                    <td>{{$emb->matricula}}</td>
                    <td>{{$emb->nombre}} {{$emb->apellido}} </td>
                    <td>{{$emb->tipoEmbarcacion}}</td>
                    <td>{{$emb->propietario}}</td>
                    <td></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection