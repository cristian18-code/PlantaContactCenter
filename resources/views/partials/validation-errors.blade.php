@if($errors->any())
{{-- {{dd($errors)}} --}}
    <div class="alert alert-danger">
        <ul class="m-0">
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif