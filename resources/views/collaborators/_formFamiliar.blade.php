<input type="hidden" name="familiers" id="familiers" disabled class="form-control" value="{{count($collaborator->familiers)}}">
<div id="cont-familiers" class="row col-md-12">
    @foreach ($collaborator->familiers as $familier)
        <div class="row col-md-12">
            <div class="row col-md-12">
                <h5 class="text-gray-700">Familiar {{$loop->iteration}}</h5>
                @if($familier->emergencia == 'Si') <small class="text-danger">Contactar en caso de emergencia</small> @endif
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="text" disabled class="form-control" value="{{$familier->nombre}}">
                </div>
                <div class="form-group col-md-4">
                    <label>Fecha de nacimiento</label>
                    <input type="text" disabled class="form-control" value="{{$familier->fNacimiento}}">
                </div>
                <div class="form-group col-md-4">
                    <label>Genero</label>
                    <input type="text" disabled class="form-control" value="{{$familier->genero}}">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-4">
                    <label>Ocupacion</label>
                    <input type="text" disabled class="form-control" value="{{$familier->ocupacion}}">
                </div>
                <div class="form-group col-md-4">
                    <label>Celular</label>
                    <input type="text" disabled class="form-control" value="{{$familier->celular}}">
                </div>
                <div class="form-group col-md-4">
                    <label>Parentesco</label>
                    <input type="text" disabled class="form-control" value="{{$familier->parentesco}}">
                </div>                
            </div>
        </div>            
    @endforeach
</div>