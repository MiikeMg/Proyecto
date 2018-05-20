@extends('layouts.myapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                <div class="card-header">
                  @if(Auth::User()->role=='admin')
                    <a href="{{ url('/admin/adminShowUsers') }}" class="btn btn-xs btn-info pull-right">Mostrar Usuarios</a>
                  <a href="{{ url('/admin/adminCreateUsers') }}" class="btn btn-xs btn-info pull-right">Crear Usuarios</a>
                  @elseif(Auth::User()->role=='editor')
                   <a href="{{ url('/editor') }}" class="btn btn-xs btn-info pull-right">Menu Editor</a>
                  @else
                  
                  @endif
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
