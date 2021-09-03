<div class="form-group">
    <label for="name">Nombre completo del usuario</label>
    <input id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($user) ? $user->name : '') }}" type="text" name="name" autocomplete="off">
</div>
@error('name')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('name') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@enderror
<div class="form-group">
    <label for="username">username</label>
    <input id="username" class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{old('username', isset($user) ? $user->username : '')}}" autocomplete="off">
</div>
@error('username')
    <div class="alert alert-danger mt-2">
        <ul class="m-0">
            @foreach($errors->get('username') as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@enderror
<div class="form-group">
    <label for="password">Contraseña</label>
    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
</div>
@error('password')
<div class="alert alert-danger mt-2">
    <ul class="m-0">
        @foreach($errors->get('password') as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@enderror
<h3>Listado de roles</h3>
@error('roles')
<div class="alert alert-danger mt-2">
    <ul class="m-0">
        @foreach($errors->get('roles') as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@enderror
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role)
            <li>
                <label>
                    {!! Form::checkbox('roles[]', $role->id) !!}
                    {{$role->name}} |
                    <em>{{$role->description}}</em>   
                </label>
            </li>
        @endforeach
    </ul>
</div>