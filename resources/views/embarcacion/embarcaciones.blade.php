@extends('layouts.plantilla')

@section('content')
    <div class="container mt-3">
        <h2>Embarcaciones</h2>
        <div class="d-flex flex-row-reverse">
        <button type="button" class="btn btn-dark">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"></path>
            </svg>
            Agregar embarcación</div>
        </button>
        </div>
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
                    <td data-bs-toggle="modal" data-bs-target="#myModalEmb{{$emb->idEmbarcacion}}">{{$emb->matricula}}</td>
                    <td data-bs-toggle="modal" data-bs-target="#myModalEmb{{$emb->idEmbarcacion}}">{{$emb->nombre}}</td>
                    <td data-bs-toggle="modal" data-bs-target="#myModalEmb{{$emb->idEmbarcacion}}">{{$emb->tipoEmbarcacion}}</td>
                    <td data-bs-toggle="modal" data-bs-target="#myModalEmb{{$emb->idEmbarcacion}}">{{$emb->propietario}}</td>
                    <td>
                        
                        <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Eliminar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                        </svg>

                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Editar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                        </svg>                
                        </div>

                    </th>
                </tr>

                <!-- The Modal -->
                <div class="modal fade" id="myModalEmb{{$emb->idEmbarcacion}}">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">{{$emb->nombre}}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item">Color: {{$emb->color}}</li>
                                <li class="list-group-item">Largo: {{$emb->ancho}}</li>
                                <li class="list-group-item">Ancho: {{$emb->ancho}}</li>
                                <li class="list-group-item">Carga máxima: {{$emb->carga_max}}</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection