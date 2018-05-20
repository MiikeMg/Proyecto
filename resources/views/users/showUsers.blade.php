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
                  <h2>
                    Usuarios
                  </h2>
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
                          <th>Editar</th>
                          <th>Eliminar</th>
                        </tr>
                     </thead>
                      @foreach($users as $user)
                      <tbody>
                        <tr>
                         <td>{{$user->name}}</td>
                         <td>{{$user->email}}</td>
                         <td>{{$user->role}}</td>
                         <td>{{$user->created_at}}</td>
                         <td><a href="/admin/{{$user->id}}/adminEditUser" class="btn btn-primary btn-sm">Editar</a></td>
                         <td>
                          <form action="/admin/{{$user->id}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button onclick="pregunta(event)" type="submit" class="btn btn-danger btn-sm btn-delete">Eliminar</button>
                          </form>
                        </td>
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

@section('scripts')
<script language="JavaScript"> 

    function pregunta(e){ 
        if(!confirm('¿Está seguro que desea Eliminar al usuario?')){ 
          e.preventDefault();
        } 
    } 

</script>
@endsection