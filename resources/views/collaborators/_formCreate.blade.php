<div class="row col-md-12">
<div class="row col-md-8">
    <div class="row col-md-12">
        <div class="form-group col-md-6">
            <label for="cedula">Cedula</label>
            <input id="cedula" name="cedula" class="@error('cedula') is-invalid @enderror form-control" type="text" autocomplete="off" value="{{ old('cedula') }}" placeholder="cedula" >
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
        <div class="form-group col-md-6">
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" class="@error('nombre') is-invalid @enderror form-control" type="text" autocomplete="off" value="{{ old('nombre') }}" placeholder="Nombre" >
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
    </div>
    <div class="row col-md-12">
        <div class="form-group col-md-6">
            <label for="Fingreso">Fecha de ingreso </label>
            <input id="Fingreso" name="Fingreso" class="@error('Fingreso') is-invalid @enderror form-control" value="{{old('Fingreso')}}" type="date">
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
        <div class="form-group col-md-6">
            <label for="contrato">Tipo de contrato</label>
            <select name="contrato" id="contrato" class="@error('contrato') is-invalid @enderror form-control">
                @if (old('contrato') != null)
                    <option value="{{old('contrato')}}">{{old('contrato')}}</option>
                @else
                    <option value="" hidden>Selecciona una opcion</option>
                @endif
                <option value="TERMINO INDEFINIDO">TERMINO INDEFINIDO</option>
                <option value="TERMINO FIJO">TERMINO FIJO</option>
                <option value="OBRA Y/O LABOR">OBRA Y/O LABOR</option>
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
</div>
<div class="col-md-4 cont-img">    
    <label for="picture" class="input-label">
        <img src="{{asset('public/media/img/user.png')}}" alt="Avatar" class="img-circle previsualizar" />
    </label><input type="file" style="display: none" name="picture" id="picture" />
</div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="supervisor">Supervisor</label>
        <select id="supervisor" class="@error('supervisor') is-invalid @enderror form-control" name="supervisor" >
            @if (old('supervisor') != null)
                <option value="{{old('supervisor')}}">{{old('supervisor')}}</option>
            @else
                <option value="" hidden>Selecciona una opcion</option>
            @endif
            <option value="TRIVINO GARRIDO XIOMARA">TRIVINO GARRIDO XIOMARA</option>
            <option value="JIMENEZ LIZARAZO CARMEN LUCRECIA">JIMENEZ LIZARAZO CARMEN LUCRECIA</option>
            <option value="PARRA CASTELLANOS JOHN FREDY">PARRA CASTELLANOS JOHN FREDY</option>
            <option value="MORENO PATINO HUGO ALEXANDER">MORENO PATINO HUGO ALEXANDER</option>
            <option value="RODRIGUEZ CASTRO KATHERINE">RODRIGUEZ CASTRO KATHERINE</option>
            <option value="ROJAS VANEGAS ANGIE CAROLINA">ROJAS VANEGAS ANGIE CAROLINA</option>
            <option value="MORALES QUINTERO SONIA GISELLA">MORALES QUINTERO SONIA GISELLA</option>
            <option value="SANTOS BECERRA DIANA MARCELA">SANTOS BECERRA DIANA MARCELA</option>
            <option value="VALLEJO RIAÑO JOHN FREDY">VALLEJO RIAÑO JOHN FREDY</option>
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
    <div class="form-group col-md-6">
        <label for="campania">Campaña a la que ingresa</label>
        <select id="campania" class="@error('campania') is-invalid @enderror form-control" name="campania" >
            @if (old('campania') != null)
                <option value="{{old('campania')}}">{{old('campania')}}</option>
            @else
                <option value="" hidden>Selecciona una opcion</option>
            @endif
            <option value="BlueCare">BlueCare</option>
            <option value="Supervisor Jr">Supervisor Jr</option>
            <option value="Cobranza Y Recaudo">Cobranza Y Recaudo</option>
            <option value="Aseguramiento Calidad">Aseguramiento Calidad</option>
            <option value="Administrativos">Administrativos</option>
            <option value="Radicacion Pqrs">Radicacion Pqrs</option>
            <option value="Tratamiento Y Cierre De Casos">Tratamiento Y Cierre De Casos</option>
            <option value="Orientacion Al Usuario">Orientacion Al Usuario</option>
            <option value="Ventas">Ventas</option>
            <option value="Novedades De Agenda">Novedades De Agenda</option>
            <option value="Smd Y Omt">Smd Y Omt</option>
            <option value="Campañas">Campañas</option>
            <option value="Autorizaciones">Autorizaciones</option>
            <option value="Formacion Y Entrenamiento">Formacion Y Entrenamiento</option>
            <option value="Medcenter">Medcenter</option>
            <option value="Autorizacion Medicamentos">Autorizacion Medicamentos</option>
            <option value="Areas De Apoyo">Areas De Apoyo</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Validacion Afiliaciones Y Perfilamiento">Validacion Afiliaciones Y Perfilamiento</option>
            <option value="Vacunacion">Vacunacion</option>
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
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="cargoNomina">Cargo de nomina</label>
        <select id="cargoNomina" class="@error('cargoNomina') is-invalid @enderror form-control" name="cargoNomina" >
            @if (old('cargoNomina') != null)
                <option value="{{old('cargoNomina')}}">{{old('cargoNomina')}}</option>
            @else
                <option value="" hidden>Selecciona una opcion</option>
            @endif
            <option value="Agente Contac Center">Agente Contac Center</option>
            <option value="Analista Calidad">Analista Calidad</option>
            <option value="Analista Soporte Tecnologia">Analista Soporte Tecnologia</option>
            <option value="Aprendiz Sena">Aprendiz Sena</option>
            <option value="Autorizador Medicamentos">Autorizador Medicamentos</option>
            <option value="Auxiliar Novedades">Auxiliar Novedades</option>
            <option value="Auxiliar Operativo">Auxiliar Operativo</option>
            <option value="Auxiliar Soporte Tecnologia">Auxiliar Soporte Tecnologia</option>
            <option value="Auxiliar Telefonico">Auxiliar Telefonico</option>
            <option value="Consultor Back Office">Consultor Back Office</option>
            <option value="Consultor Contac Center">Consultor Contac Center</option>
            <option value="Coordinador Procesos De Apoyo">Coordinador Procesos De Apoyo</option>
            <option value="Director de Operaciones">Director de Operaciones</option>
            <option value="Facilitador Contac Center">Facilitador Contac Center</option>
            <option value="Gerente Contact Center">Gerente Contact Center</option>
            <option value="Gestor Tiempo Real">Gestor Tiempo Real</option>
            <option value="Supervisor Operativo Contac Ce">Supervisor Operativo Contac</option>
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
    <div class="form-group col-md-6">
        <label for="sueldo">Sueldo</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="text" class="@error('sueldo') is-invalid @enderror form-control" value="{{old('sueldo')}}" id="sueldo" name="sueldo" placeholder="salario">
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