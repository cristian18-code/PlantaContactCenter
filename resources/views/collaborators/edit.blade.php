@extends('layouts.admin')
@section('title','Editar Colaborador')
@section('styles')

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
                    </div>
                    {!! Form::model($collaborator, ['route'=>['collaborators.update', $collaborator], 'method'=>'PUT', 'class'=>'row g-3']) !!}
                        @include('collaborators._formEdit')
                        <button type="submit" class="btn btn-primary mr-2 float-left col-3">Actualizar datos</button>
                        <a href="{{route('collaborators.index')}}" class="btn btn-danger mr-2 float-right col-2">
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
    {!! Html::script('public/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}    
@endsection