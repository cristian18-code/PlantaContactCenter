@extends('layouts.admin')
@section('title', 'Registrar colaborador')
@section('styles')
<style>
    .input-label {
        border: solid 1px #53535349;
        width:100%;
    }
    .input-label img{
        width:100%;
        padding: 5px;
        max-height: 150px;
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title mb-0">
            Colaboradores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
                <li class="breadcrumb-item"><a href="{{route('collaborators.index')}}">Colaboradores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar colaborador</li>
            </ol>
        </nav>               
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar colaborador</h4>
                    </div>
                    {!! Form::open(['route'=>'collaborators.store', 'method'=>'POST', 'files'=>true]) !!}
                        @include('collaborators._formCreate')
                        <button type="submit" class="btn btn-primary mr-2 float-left">Guardar datos</button>
                        <a href="{{route('collaborators.index')}}" class="btn btn-danger mr-2 float-right">
                            Cancelar
                        </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    {!! Html::script('public/sb-admin-2/vendor/sweetalert2/sweetalert2.js') !!}
    {!! Html::script('public/media/js/image_collaborator.js') !!}
    {!! Html::script('public/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
@endsection