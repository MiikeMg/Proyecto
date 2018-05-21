
                <div class="card-body">
                  @if($articles->total()==0)
                  Ups! Parece que aun no has creado ni un articulo, puedes crear uno en el boton "Crear Articulo".
                  @else
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
                    @endif
                </div>