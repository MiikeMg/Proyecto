@extends('layouts.myapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <h2>
                    Crear Usuario
                  </h2>
                </div>
                @include('categories._errors')
                      {!! Form::open(['action'=>'CategoryController@store']) !!}
                          <div class="form-group col-md-6">
                              {!! Form::label('name', 'Nombre') !!}
                              {!! Form::text('name', null, ['class' => 'form-control',
                                  'placeholder' => 'Nombre de la categoría', 'required']) !!}
                          </div>

                          {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                      {!! Form::close() !!}
                  <div class="card-body">
                  @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection