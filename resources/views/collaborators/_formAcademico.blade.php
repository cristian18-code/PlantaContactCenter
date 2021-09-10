<input type="hidden" name="studies" id="studies" disabled class="form-control" value="{{count($collaborator->studies)}}">
<div id="cont-studies" class="row col-md-12">
    @foreach ($collaborator->studies as $studie)
        <div class="row col-md-12">
            <div class="row col-md-12">
                <h5 class="text-gray-700">Estudio {{$loop->iteration}}</h5>
            </div>
            <div class="form-group col-md-4">
                <label for="nivel">Nivel Educativo</label>
                <input type="text" name="nivel" id="nivel" disabled class="form-control" value="{{$studie->nivel}}">
            </div>
            <div class="form-group col-md-4">
                <label for="titulo">titulo</label>
                <input type="text" name="titulo" id="titulo" disabled class="form-control" value="{{$studie->titulo}}">
            </div>
            <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" disabled class="form-control" value="{{$studie->estado}}">
            </div>
        </div>            
    @endforeach
</div>