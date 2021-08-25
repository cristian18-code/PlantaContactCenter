@extends('layouts.admin')
@section('title', 'Registrar usuario')
@section('content')
<div class="content-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title mb-0">
            Usuarios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Panel principal</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar Usuario</li>
            </ol>
        </nav>               
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar usuario</h4>
                    </div>
                    {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
                        @include('users._form')
                        <button type="submit" class="btn btn-primary mr-2 float-left">Guardar datos</button>
                        <a href="{{route('users.index')}}" class="btn btn-danger mr-2 float-right">
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