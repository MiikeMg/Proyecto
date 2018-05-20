                   @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
                   @endif

                   @if($errors->any())
                      <ul class="alert alert-danger">
                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                    </ul>
                    @endif
