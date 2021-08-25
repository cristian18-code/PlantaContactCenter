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
            <li class="breadcrumb-item"><a href="#">Panel principal</a></li>
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
                    <div class="btn-group">
                        {{-- <h4 class="card-title">
                            <a href="#">
                                <i class="fas fa-download"></i>
                                Exportar
                            </a>
                        </h4> --}}
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>campaña</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collaborators as $collaborator)
                            <tr>
                                <th scope="row">{{$collaborator->id}}</th>
                                <td>
                                    <a href="{{route('collaborators.show', $collaborator)}}">{{$collaborator->nombre}}</a>
                                </td>
                                <td>{{$collaborator->campania}}</td>
                                <td>{{$collaborator->cargoNomina}}</td>
                                <td style="width: 50px;">
                                    
                                    {!! Form::open(['route'=>['collaborators.destroy',$collaborator], 'method'=>'DELETE', 'id'=>'form_eliminar'.$collaborator->id]) !!}

                                    <a class="btn btn-info btn-circle btn-sm" href="{{route('collaborators.edit', $collaborator)}}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    
                                    <button class="btn btn-danger btn-circle btn-sm" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            <script>
                                $('#form_eliminar{{$collaborator->id}}').submit(function(e){
                                    e.preventDefault();
                                    Swal.fire({
                                    title: 'Estas seguro de eliminar a {{$collaborator->nombre}}?',
                                    text: "Esta accion no se podra reversar!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, eliminarlo/a!',
                                    cancelButtonText: 'Cancelar'
                                    }).then((result) => {
                                    if (result.value) {
                                        this.submit();
                                    }
                                    })
                                });
                            </script>
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
    {!! Html::script('public/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
    {!! Html::script('public/media/js/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('public/sb-admin-2/vendor/datatables/dataTables.bootstrap4.js') !!}    
@endsection