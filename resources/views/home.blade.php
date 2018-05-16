@extends('layouts.app')
<<<<<<< HEAD
=======

>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                <div class="card-header">
                  @if(Auth::User()->role=='admin')
                    <a href="{{ url('/admin') }}" class="btn btn-xs btn-info pull-right">Menu Administrador</a>
                  @elseif(Auth::User()->role=='editor')
                   <a href="{{ url('/editor') }}" class="btn btn-xs btn-info pull-right">Menu Editor</a>
                  @else
                  
                  @endif
                </div>

                <div class="card-body">
=======
                <div class="card-header">Bienvenido {{Auth::User()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @else
                      Nivel de usuario "{{Auth::User()->role}}"
                  @endif
>>>>>>> a618ce39020c880ccea0a46d36b4f82079f07b40

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
