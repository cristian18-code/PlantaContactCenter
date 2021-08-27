<div class="form-group">
    <label for="name">Nombre de rol</label>
    <input id="name" class="form-control" type="text" value="{{old('name', isset($role) ? $role->name : '')}}" required autocomplete="off" name="name">
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input id="slug" class="form-control" type="text" value="{{old('slug', isset($role) ? $role->slug : '')}}" name="slug" required autocomplete="off">
</div>
    <div class="form-group">
    <label for="description">Descripcion</label>
    <textarea id="description" class="form-control" name="description" rows="3" required>{{old('description', isset($role) ? $role->description : '')}}</textarea>
</div>
<h3>Permisos especiales</h3>
<div class="form-group">
    <label>{!! Form::radio('special', 'all-access') !!} Acceso total</label>
    <label>{!! Form::radio('special', 'no-access') !!} Ningun acceso</label>
</div>

<h3>Listado de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
            <li>
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, null) !!}
                    {{$permission->name}} |
                    <em>{{$permission->description}}</em>   
                </label>
            </li>
        @endforeach
    </ul>
</div>