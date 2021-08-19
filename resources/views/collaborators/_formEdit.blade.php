<div class="row col-12">
    <div class="form-group col-md-3">
        <label for="cedula">Cedula</label>
        <input id="cedula" name="cedula" class="@error('cedula') is-invalid @enderror form-control" type="text" autocomplete="off" value="{{ $collaborator->cedula }}" disabled>
        @error('cedula')
            <div class="alert alert-danger mt-2">
                <ul class="m-0">
                    @foreach($errors->get('cedula') as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>        
            </div>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" class="@error('nombre') is-invalid @enderror form-control" type="text" autocomplete="off" value="{{ old('nombre', $collaborator->nombre) }}">
        @error('nombre')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('nombre') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="Fingreso">Fecha de ingreso </label>
        <input id="Fingreso" name="Fingreso" class="@error('Fingreso') is-invalid @enderror form-control" value="{{old('Fingreso', $collaborator->Fingreso)}}" type="date">
        @error('Fingreso')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('Fingreso') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="contrato">Tipo de contrato</label>
        <select name="contrato" id="contrato" class="@error('contrato') is-invalid @enderror form-control">
            <option value="" hidden>Selecciona una opcion</option>
            <option {{ (old('contrato', $collaborator->contrato) == 'TERMINO INDEFINIDO') ? 'selected' : '' }} value="TERMINO INDEFINIDO">TERMINO INDEFINIDO</option>
            <option {{ (old('contrato', $collaborator->contrato) == 'TERMINO FIJO') ? 'selected' : '' }} value="TERMINO FIJO">TERMINO FIJO</option>
            <option {{ (old('contrato', $collaborator->contrato) == 'OBRA Y/O LABOR') ? 'selected' : '' }} value="OBRA Y/O LABOR">OBRA Y/O LABOR</option>
        </select>
        @error('contrato')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('contrato') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
</div>
<div class="row col-12">
    <div class="form-group col-md-3">
        <label for="supervisor">Supervisor</label>
        <select id="supervisor" class="@error('supervisor') is-invalid @enderror form-control" name="supervisor" >        
            <option value="" hidden>Selecciona una opcion</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'TRIVINO GARRIDO XIOMARA') ? 'selected' : '' }} value="TRIVINO GARRIDO XIOMARA">TRIVINO GARRIDO XIOMARA</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'JIMENEZ LIZARAZO CARMEN LUCRECIA') ? 'selected' : '' }} value="JIMENEZ LIZARAZO CARMEN LUCRECIA">JIMENEZ LIZARAZO CARMEN LUCRECIA</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'PARRA CASTELLANOS JOHN FREDY') ? 'selected' : '' }} value="PARRA CASTELLANOS JOHN FREDY">PARRA CASTELLANOS JOHN FREDY</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'MORENO PATINO HUGO ALEXANDER') ? 'selected' : '' }} value="MORENO PATINO HUGO ALEXANDER">MORENO PATINO HUGO ALEXANDER</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'RODRIGUEZ CASTRO KATHERINE') ? 'selected' : '' }} value="RODRIGUEZ CASTRO KATHERINE">RODRIGUEZ CASTRO KATHERINE</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'ROJAS VANEGAS ANGIE CAROLINA') ? 'selected' : '' }} value="ROJAS VANEGAS ANGIE CAROLINA">ROJAS VANEGAS ANGIE CAROLINA</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'MORALES QUINTERO SONIA GISELLA') ? 'selected' : '' }} value="MORALES QUINTERO SONIA GISELLA">MORALES QUINTERO SONIA GISELLA</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'SANTOS BECERRA DIANA MARCELA') ? 'selected' : '' }} value="SANTOS BECERRA DIANA MARCELA">SANTOS BECERRA DIANA MARCELA</option>
            <option {{ (old('supervisor', $collaborator->supervisor) == 'VALLEJO RIAÑO JOHN FREDY') ? 'selected' : '' }} value="VALLEJO RIAÑO JOHN FREDY">VALLEJO RIAÑO JOHN FREDY</option>
        </select>
        @error('supervisor')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('supervisor') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>  
    <div class="form-group col-md-3">
        <label for="campania">Campaña a la que ingresa</label>
        <select id="campania" class="@error('campania') is-invalid @enderror form-control" name="campania" >
            <option value="" hidden>Selecciona una opcion</option>
            <option {{ (old('campania', $collaborator->campania) == 'BlueCare') ? 'selected' : '' }} value="BlueCare">BlueCare</option>
            <option {{ (old('campania', $collaborator->campania) == 'Supervisor Jr') ? 'selected' : '' }} value="Supervisor Jr">Supervisor Jr</option>
            <option {{ (old('campania', $collaborator->campania) == 'Cobranza Y Recaudo') ? 'selected' : '' }} value="Cobranza Y Recaudo">Cobranza Y Recaudo</option>
            <option {{ (old('campania', $collaborator->campania) == 'Aseguramiento Calidad') ? 'selected' : '' }} value="Aseguramiento Calidad">Aseguramiento Calidad</option>
            <option {{ (old('campania', $collaborator->campania) == 'Administrativos') ? 'selected' : '' }} value="Administrativos">Administrativos</option>
            <option {{ (old('campania', $collaborator->campania) == 'Radicacion Pqrs') ? 'selected' : '' }} value="Radicacion Pqrs">Radicacion Pqrs</option>
            <option {{ (old('campania', $collaborator->campania) == 'Tratamiento Y Cierre De Casos') ? 'selected' : '' }} value="Tratamiento Y Cierre De Casos">Tratamiento Y Cierre De Casos</option>
            <option {{ (old('campania', $collaborator->campania) == 'Orientacion Al Usuario') ? 'selected' : '' }} value="Orientacion Al Usuario">Orientacion Al Usuario</option>
            <option {{ (old('campania', $collaborator->campania) == 'Ventas') ? 'selected' : '' }} value="Ventas">Ventas</option>
            <option {{ (old('campania', $collaborator->campania) == 'Novedades De Agenda') ? 'selected' : '' }} value="Novedades De Agenda">Novedades De Agenda</option>
            <option {{ (old('campania', $collaborator->campania) == 'Smd Y Omt') ? 'selected' : '' }} value="Smd Y Omt">Smd Y Omt</option>
            <option {{ (old('campania', $collaborator->campania) == 'Campañas') ? 'selected' : '' }} value="Campañas">Campañas</option>
            <option {{ (old('campania', $collaborator->campania) == 'Autorizaciones') ? 'selected' : '' }} value="Autorizaciones">Autorizaciones</option>
            <option {{ (old('campania', $collaborator->campania) == 'Formacion Y Entrenamiento') ? 'selected' : '' }} value="Formacion Y Entrenamiento">Formacion Y Entrenamiento</option>
            <option {{ (old('campania', $collaborator->campania) == 'Medcenter') ? 'selected' : '' }} value="Medcenter">Medcenter</option>
            <option {{ (old('campania', $collaborator->campania) == 'Autorizacion Medicamentos') ? 'selected' : '' }} value="Autorizacion Medicamentos">Autorizacion Medicamentos</option>
            <option {{ (old('campania', $collaborator->campania) == 'Areas De Apoyo') ? 'selected' : '' }} value="Areas De Apoyo">Areas De Apoyo</option>
            <option {{ (old('campania', $collaborator->campania) == 'Tecnologia') ? 'selected' : '' }} value="Tecnologia">Tecnologia</option>
            <option {{ (old('campania', $collaborator->campania) == 'Validacion Afiliaciones Y Perfilamiento') ? 'selected' : '' }} value="Validacion Afiliaciones Y Perfilamiento">Validacion Afiliaciones Y Perfilamiento</option>
            <option {{ (old('campania', $collaborator->campania) == 'Vacunacion') ? 'selected' : '' }} value="Vacunacion">Vacunacion</option>
        </select>
        @error('campania')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('campania') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="cargoNomina">Cargo de nomina</label>
        <select id="cargoNomina" class="@error('cargoNomina') is-invalid @enderror form-control" name="cargoNomina">
            <option value="" hidden>Selecciona una opcion</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Agente Contac Center') ? 'selected' : '' }} value="Agente Contac Center">Agente Contac Center</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Analista Calidad') ? 'selected' : '' }} value="Analista Calidad">Analista Calidad</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Analista Soporte Tecnologia') ? 'selected' : '' }} value="Analista Soporte Tecnologia">Analista Soporte Tecnologia</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Aprendiz Sena') ? 'selected' : '' }} value="Aprendiz Sena">Aprendiz Sena</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Autorizador Medicamentos') ? 'selected' : '' }} value="Autorizador Medicamentos">Autorizador Medicamentos</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Auxiliar Novedades') ? 'selected' : '' }} value="Auxiliar Novedades">Auxiliar Novedades</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Auxiliar Operativo') ? 'selected' : '' }} value="Auxiliar Operativo">Auxiliar Operativo</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Auxiliar Soporte Tecnologia') ? 'selected' : '' }} value="Auxiliar Soporte Tecnologia">Auxiliar Soporte Tecnologia</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Auxiliar Telefonico') ? 'selected' : '' }} value="Auxiliar Telefonico">Auxiliar Telefonico</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Consultor Back Office') ? 'selected' : '' }} value="Consultor Back Office">Consultor Back Office</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Consultor Contac Center') ? 'selected' : '' }} value="Consultor Contac Center">Consultor Contac Center</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Coordinador Procesos De Apoyo') ? 'selected' : '' }} value="Coordinador Procesos De Apoyo">Coordinador Procesos De Apoyo</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Director de Operaciones') ? 'selected' : '' }} value="Director de Operaciones">Director de Operaciones</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Facilitador Contac Center') ? 'selected' : '' }} value="Facilitador Contac Center">Facilitador Contac Center</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Gerente Contact Center') ? 'selected' : '' }} value="Gerente Contact Center">Gerente Contact Center</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Gestor Tiempo Real') ? 'selected' : '' }} value="Gestor Tiempo Real">Gestor Tiempo Real</option>
            <option {{ (old('cargoNomina', $collaborator->cargoNomina) == 'Supervisor Operativo Contac Ce') ? 'selected' : '' }} value="Supervisor Operativo Contac Ce">Supervisor Operativo Contac</option>
        </select>
        @error('cargoNomina')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('cargoNomina') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
    <div class="form-group col-md-3">
        <label for="sueldo">Sueldo</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="text" class="@error('sueldo') is-invalid @enderror form-control" value="{{old('sueldo', $collaborator->sueldo)}}" id="sueldo" name="sueldo" placeholder="salario">
        </div>
        @error('sueldo')
        <div class="alert alert-danger mt-2">
            <ul class="m-0">
                @foreach($errors->get('sueldo') as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>        
        </div>
        @enderror
    </div>
</div>
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