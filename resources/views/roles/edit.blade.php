@extends('layouts.admin')
@section('title','Editar rol')
@section('styles')

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Editar rol
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar rol</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar rol</h4>
                    </div>

                    {!! Form::model($role, ['route'=>['roles.update', $role], 'method'=>'PUT']) !!}
                    
                    @include('roles._form')

                    <button type="submit" class="btn btn-primary mr-2">Actualizar rol</button>
                    <a href="{{route('roles.index')}}" class="btn btn-danger mr-2">
                        Cancelar
                    </a>
                    {!! Form::close() !!}

                </div>
                {{--  <div class="card-footer text-muted">
                    {{$roles->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection