@extends('layouts.index')
@section('title', 'Datos de colaborador')
@section('options')
{{$collaborator->sueldo = number_format($collaborator->sueldo)}}
@endsection
@section('styles')
<style type="text/css">
    .unstyled-button{
        border: none;
        padding: 0;
        background: none;
    }
</style>
    {!! Html::style('public/sb-admin-2/vendor/datatables/dataTables.bootstrap4.css') !!}
    {{-- {!! Html::style('public/css/app.css') !!} --}}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="page-title">
            {{$collaborator->nombre}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('collaborators.index')}}">Colaboradores</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$collaborator->nombre}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" id="datos">
                    <datos-colaborador variable="{{ $collaborator }}"/>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('collaborators.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Que estado deseas asignar?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::model($collaborator, ['route'=>['collaborators.change_status', $collaborator], 'method'=>'PUT']) !!}
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select id="estado" class="form-control" name="estado" required>
                        <option value="" hidden>Selecciona un estado</option>
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="AUSENTE">AUSENTE</option>
                        <option value="INCAPACIDAD">INCAPACIDAD</option>
                        <option value="RETIRO">RETIRO</option>
                        <option value="VACACIONES">VACACIONES</option>
                        <option value="VACANTE">VACANTE</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
    {!! Html::script('public/sb-admin-2/vendor/sweetalert2/sweetalert2.js') !!}
    <script type="text/javascript" src="{{asset('public/js/app.js')}}" async></script>
@endsection