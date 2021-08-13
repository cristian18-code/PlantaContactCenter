<div class="col-md-6">
    <label for="genero" class="form-label">Genero</label>
    @error('genero')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('genero') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
    <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
        @if (old('genero', $collaborator->genero) != null)
            <option value="{{old('genero', $collaborator->genero)}}">{{old('genero', $collaborator->genero)}}</option>
        @else
            <option value="" hidden>Selecciona una opcion</option>
        @endif
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
</div>
<div class="col-md-6">
    <label for="localidad" class="form-label">Localidad</label>
    <input type="text" name="localidad" id="localidad" value="{{old('localidad', $collaborator->localidad)}}" class="form-control @error('localidad') is-invalid @enderror">
    @error('localidad')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('localidad') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
</div>
<div class="col-12 mt-2">
    <label for="barrio" class="form-label">Barrio</label>
    <input type="text" class="form-control @error('barrio') is-invalid @enderror" id="barrio" name="barrio" value="{{old('barrio', $collaborator->barrio)}}" placeholder="1234 Main St">
    @error('barrio')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('barrio') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
</div>
<div class="col-4 mt-2">
    <label for="hijos" class="form-label">¿Tiene hijos?</label>
    <select name="hijos" id="hijos" class="form-control">
        @if (old('hijos', $collaborator->hijos) != null)
            <option value="{{old('hijos', $collaborator->hijos)}}">{{old('hijos', $collaborator->hijos)}}</option>
        @else
            <option value="" hidden>Selecciona una opcion</option>
        @endif
        <option value="Si">Si</option>
        <option value="No">No</option>
        <option value="Sin Data">Sin Data</option>
    </select>
    @error('hijos')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('hijos') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
</div>
<div class="col-md-4 mt-2">
    <label for="estrato" class="form-label ">Estrato</label>
    <input type="text" class="form-control @error('estrato') is-invalid @enderror" name="estrato" id="estrato" value="{{old('estrato', $collaborator->estrato)}}">
    @error('estrato')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('estrato') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
</div>
<div class="col-md-4 mt-2 mb-4">
    <label for="nivelEstudio" class="form-label">Nivel de estudio</label>
    <select id="nivelEstudio" name="nivelEstudio" class="form-control form-select @error('nivelEstudio') is-invalid @enderror">
        @if (old('nivelEstudio', $collaborator->nivelEstudio) != null)
            <option value="{{old('nivelEstudio', $collaborator->nivelEstudio)}}">{{old('nivelEstudio', $collaborator->nivelEstudio)}}</option>
        @else
            <option value="" hidden>Selecciona una opcion</option>
        @endif
        <option value="Bachiller">Bachiller</option>
        <option value="Master">Master</option>
        <option value="Profesional">Profesional</option>
        <option value="Sin Data">Sin Data</option>
        <option value="Técnico">Técnico</option>
        <option value="Tecnologo">Tecnologo</option>
    </select>
    @error('nivelEstudio')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('nivelEstudio') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>        
    </div>
    @enderror
</div>