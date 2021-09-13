@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <h1 class="h4 text-gray-900 mb-2">{{__('Forgot Password?')}}</h1>
                                    <p class="mb-4">Lo entendemos, estas cosas pasan. Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña!</p>
                                </div>
                                {!! Form::open(['route'=>'password.email', 'method'=>'POST', 'class'=>'user']) !!}
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="email" aria-describedby="emailHelp"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Ingrese su correo electronico...">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                {!! Form::close() !!}
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{route('login')}}">{{__('Already have an account? Login!')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection