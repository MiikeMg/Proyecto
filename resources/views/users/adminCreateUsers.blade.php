@extends('layouts.app')
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
                  <h1>
                    Creacion de Usuarios
                  </h1>
                </div>
                  <div class="card-body">
                    @if(!isset($user))
      {!! Form::open() !!}
    @else
      {!! Form::model() !!}
    @endif
                    {!! Form::open() !!}
                    <button type="submit" class="btn btn-success">Aceptar</button>
                    {!! Form::close() !!}
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection