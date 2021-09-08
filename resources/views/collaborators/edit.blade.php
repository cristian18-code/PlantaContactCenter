@extends('layouts.admin')
@section('title','Editar Colaborador')
@section('styles')
<style>
    form, form select, form input {
        font-size: .85rem !important;
    }
    form textarea {
        resize: none;
    }
    .cont-datos{
        border: solid .1rem #96bbf1;
    }
    .cont-datos .text{
        color: #6e6e6e;
        margin-bottom: 1rem;
    }
    .input-label {
        width:100%;
    }
    .input-label img{
        width:100%;
        padding: 5px;
        max-height: 100%;
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title mb-0">
            {{$collaborator->nombre}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
                <li class="breadcrumb-item"><a href="{{route('collaborators.index')}}">Colaboradores</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$collaborator->nombre}}</li>
            </ol>
        </nav>               
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Actualizar informacion</h4>
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#inf_academicaModal">
                                Academica
                            </button>
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#inf_familiarModal">
                                Familiar
                            </button>
                        </div>
                    </div>
                    {!! Form::model($collaborator, ['route'=>['collaborators.update', $collaborator], 'method'=>'PUT', 'class'=>'row g-3', 'files'=>true]) !!}
                        @include('collaborators._formEdit')
                        <button type="submit" class="btn btn-primary mr-2 float-left col-3">Actualizar datos</button>
                        <a href="{{route('collaborators.index')}}" class="btn btn-danger mr-2 float-right col-2">
                            Cancelar
                        </a>
                        {{-- Modals --}}
                            <!-- Academica -->
                            <div class="modal fade" id="inf_academicaModal" tabindex="-1" aria-labelledby="inf_academicaModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="inf_academicaModalLabel">Información Academica</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        @include('collaborators._formAcademico')
                                    </div>
                                    <div class="modal-footer">
                                        <div class="container">
                                            <button type="button" class="btn btn-primary btn-icon-split row float-left" id="btn_addStudie">
                                                <span class="icon">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="text">Agregar estudio</span>
                                            </button>
                                            <button type="button" class="btn btn-danger float-right" id="closeAcademico" data-dismiss="modal">Cerrar</button>
                                        </div>                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Academica -->
                            <!-- Familiar -->
                            <div class="modal fade" id="inf_familiarModal" tabindex="-1" aria-labelledby="inf_familiarModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="inf_familiarModalLabel">Información Familiar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        @include('collaborators._formFamiliar')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="closeAcademico" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Familar -->
                        {{-- Modals --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    {!! Html::script('public/sb-admin-2/vendor/sweetalert2/sweetalert2.js') !!}
    {!! Html::script('public/media/js/studies_collaborator.js') !!}
    {!! Html::script('public/media/js/image_collaborator.js') !!}
    {!! Html::script('public/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}    
@endsection