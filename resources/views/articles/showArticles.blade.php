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
                    Articulos
                  </h2>
                </div>
                  
                <div class="card-body">
                  {{ $articles->links() }}
                    <table class="table table-sm">
                      <thead class="thead-dark">
                        <tr>
                          <th>Titulo</th>
                          <th>Creador</th>
                          <th>Categoria</th>
                          <th>Creado</th>
                          <th>Modificado</th>
                        </tr>
                     </thead>
                      @foreach($articles as $article)
                      <tbody>
                        <tr>
                         <td>{{$article->title}}</td>
                         <td>{{$article->user->name}}</td>
                         <td>{{$article->category->name}}</td>
                         <td>{{$article->created_at}}</td>
                         <td>{{$article->updated_at}}</td>

                        </td>
                        </tr>
                     </tbody>
                      @endforeach
                   </table>
                    {{ $articles->links() }}
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