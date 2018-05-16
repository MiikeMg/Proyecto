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
                    Usuarios
                  </h1>
                </div>
                  
                <div class="card-body">
                  {{ $users->links() }}
                    <table class="table table-sm">
                      <thead class="thead-dark">
                        <tr>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Privilegios</th>
                          <th>Fecha de Registro</th>
                        </tr>
                     </thead>
                      @foreach($users as $user)
                      <tbody>
                        <tr>
                         <td>{{$user->name}}</td>
                         <td>{{$user->email}}</td>
                         <td>{{$user->role}}</td>
                         <td>{{$user->created_at}}</td>
                        </tr>
                     </tbody>
                      @endforeach
                   </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection