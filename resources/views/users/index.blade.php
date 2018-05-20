@extends('layouts.myapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <a href="{{ url('/admin/adminShowUsers') }}" class="btn btn-xs btn-info pull-right">Mostrar Usuarios</a>
                </div>
                  
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection