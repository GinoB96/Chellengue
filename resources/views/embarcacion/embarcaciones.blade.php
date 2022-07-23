@extends('layouts.plantilla')

@section('content')
    <div class="container mt-3">

        <div class="d-flex justify-content-between mb-3">
            
                <div class="d-flex justify-content-start">
                    <div class="p-2"><h2>Embarcaciones</h2></div>
                    <div class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-train-freight-front-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5.736 0a1.5 1.5 0 0 0-.67.158L1.828 1.776A1.5 1.5 0 0 0 1 3.118v5.51l2-.6V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3.028l2 .6v-5.51a1.5 1.5 0 0 0-.83-1.342L10.936.158A1.5 1.5 0 0 0 10.264 0H5.736ZM15 9.672l-5.503-1.65A.5.5 0 0 0 9.353 8H8.5v8h4a2.5 2.5 0 0 0 2.5-2.5V9.672ZM7.5 16V8h-.853a.5.5 0 0 0-.144.021L1 9.672V13.5A2.5 2.5 0 0 0 3.5 16h4Zm-1-14a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3ZM12 5v2.728l-2.216-.665A1.5 1.5 0 0 0 9.354 7H8.5V5H12ZM7.5 5v2h-.853a1.5 1.5 0 0 0-.431.063L4 7.728V5h3.5Zm-4 5a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1Zm9 0a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1ZM5 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm7 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
                        </svg>
                    </div>
                </div>
                
            <div class="p-2">
                <button type="button" class="btn btn-dark" action="agregarEmbarcacion">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"></path>
                    </svg>
                    Agregar embarcación</div>
                </button>
            </div>
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