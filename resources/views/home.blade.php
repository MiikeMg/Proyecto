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
                    <a href="{{ url('/admin') }}" class="btn btn-xs btn-info pull-right">Menu Administrador</a>
                  @elseif(Auth::User()->role=='editor')
                   <a href="{{ url('CreateArticle') }}" class="btn btn-xs btn-info pull-right">Crear Articulo</a>
                  @else
                  <a href="{{ url('CreateArticle') }}" class="btn btn-xs btn-info pull-right">Crear Articulo</a>
                  @endif
                </div>

                <div class="card-body">
                    @include('articles.searchArticles')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
