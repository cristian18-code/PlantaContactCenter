@extends('layouts.admin')
@section('title', 'Gestion de usuarios')
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
    @can("users.create")
        <a href="{{route('users.create')}}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar usuario</span>
        </a>
    @else
        <h3 class="page-title mb-0">
            Usuarios
        </h3>
    @endcan
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>               
</div>
<!-- End of Topbar -->

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tabla de usuarios</h4>
                    <div class="btn-group">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Uername</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{@$user->roles[0]->name}}</td>
                                <td style="width: 50px;">
                                    
                                    {!! Form::open(['route'=>['users.destroy',$user], 'method'=>'DELETE', 'id'=>'form_eliminar'.$user->id, 'onSubmit'=>'return confirm("¿Esta seguro de eliminar el usuario?")']) !!}

                                        <a class="btn btn-info btn-circle btn-sm" href="{{route('users.edit', $user)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        
                                        <button class="btn btn-danger btn-circle btn-sm" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                    {!! Form::close() !!}
                                </td>
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