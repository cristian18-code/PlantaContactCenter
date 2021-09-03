@extends('layouts.admin')
@section('title', 'Gestion de roles')
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
    @can("roles.create")
        <a href="{{route('roles.create')}}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar rol</span>
        </a>
    @else
        <h3 class="page-title mb-0">
            Roles
        </h3>
    @endcan
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Panel principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Roles</li>
        </ol>
    </nav>               
</div>
<!-- End of Topbar -->

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tabla de roles</h4>
                    <div class="btn-group">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->description}}</td>
                                <td style="width: 50px;">
                                    
                                    {!! Form::open(['route'=>['roles.destroy',$role], 'method'=>'DELETE', 'id'=>'form_eliminar'.$role->id]) !!}

                                        <a class="btn btn-info btn-circle btn-sm" href="{{route('roles.edit', $role)}}" title="Editar">
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