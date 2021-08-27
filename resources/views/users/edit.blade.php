@extends('layouts.admin')
@section('title','Editar Usuario')
@section('styles')

@endsection
@section('content')
<div class="content-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title mb-0">
            {{$user->nombre}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->nombre}}</li>
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
                    {!! Form::model($user, ['route'=>['users.update', $user], 'method'=>'PUT']) !!}
                        @include('users._form')
                        <button type="submit" class="btn btn-primary mr-2 float-left col-3">Actualizar datos</button>
                        <a href="{{route('users.index')}}" class="btn btn-danger mr-2 float-right col-2">
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