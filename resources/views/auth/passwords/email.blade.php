@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">{{ __('Restablecer Contraseña') }}</div>
=======
                <div class="card-header">{{ __('Restablecer contraseña') }}</div>
>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>
>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    {{ __('Envía Link Al Correo') }}
=======
                                    {{ __('Enviar contraseña') }}
>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
