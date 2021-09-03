@extends('layouts.admin')
@section('title', 'Gestion de colaboradores')
@section('styles')
<style type="text/css">
    .unstyled-button{
        border: none;
        padding: 0;
        background: none;
    }
</style>
    {!! Html::style('public/sb-admin-2/vendor/datatables/dataTables.bootstrap4.css') !!}
@endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    @can("collaborators.create")
        <a href="{{route('collaborators.create')}}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar colaborador</span>
        </a>
    @else
        <h3 class="page-title mb-0">
            Colaboradores
        </h3>
    @endcan
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Colaboradores</li>
        </ol>
    </nav>               
</div>
<!-- End of Topbar -->

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tabla de colaboradores</h4>
                    @can('collaborators.export')
                        <div class="btn-group">
                            <h4 class="card-title">
                                <a href="{{route('collaborators.export')}}">
                                    <i class="fas fa-download"></i>
                                    Exportar
                                </a>
                            </h4>
                        </div>
                    @endcan
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>campaña</th>
                                <th>Cargo</th>
                                <th>Estado</th>
                                @if(Gate::check('collaborators.edit') || Gate::check('collaborators.destroy'))
                                    <th>Acciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collaborators as $collaborator)
                            <tr>
                                <th scope="row">{{$collaborator->id}}</th>
                                <td>
                                    <a href="{{route('collaborators.show', $collaborator)}}">{{mb_strtolower($collaborator->nombre)}}</a>
                                </td>
                                <td>{{$collaborator->campania}}</td>
                                <td>{{$collaborator->cargoNomina}}</td>
                                <td><span class="badge rounded-pill color-white @if($collaborator->estado == 'ACTIVO') bg-success @elseif($collaborator->estado == 'INCAPACIDAD' || $collaborator->estado == 'VACACIONES' || $collaborator->estado == 'AUSENTE') bg-warning @else bg-danger @endif">{{$collaborator->estado}}</span></td>
                                @if(Gate::check('collaborators.edit') || Gate::check('collaborators.destroy'))
                                    <td style="width: 50px; text-align: center;">
                                        @can('collaborators.edit')
                                            <a class="btn btn-info btn-circle btn-sm" href="{{route('collaborators.edit', $collaborator)}}" title="Editar">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        @endcan
                                        @can('collaborators.destroy')
                                        {!! Form::open(['route'=>['collaborators.destroy',$collaborator], 'method'=>'DELETE', 'id'=>'form_eliminar'.$collaborator->id, 'style'=>'display:inline;']) !!}
                                        
                                            <button class="btn btn-danger btn-circle btn-sm" type="submit" title="Eliminar">
                                                <i class="far fa-trash-alt"></i>
                                            </button>

                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                @endif    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')    
    {!! Html::script('public/sb-admin-2/vendor/sweetalert2/sweetalert2.js') !!}
    {!! Html::script('public/media/js/datatables/renderTable.js') !!}
    {!! Html::script('public/media/js/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('public/sb-admin-2/vendor/datatables/dataTables.bootstrap4.js') !!}    
@endsection