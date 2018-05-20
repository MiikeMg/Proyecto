@extends('layouts.myapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h2>
                    Editor de Usuarios
                  </h2>
                </div>
                  <div class="card-body">

                    @include('users._form')
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection