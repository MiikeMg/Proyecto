@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
