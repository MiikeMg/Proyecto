                    @include('users._errors')
                    @if(!isset($user))
                    <?php $var = '1'; ?>
                      {!! Form::open(['action' => 'AdminController@store']) !!}
                    @else
                    <?php $var = '0'; ?>
                      {!! Form::model($user, ['action' => ['AdminController@update', $user->id], 'method' => 'patch']) !!}
                    @endif
                         
                    <div class="form-group">
                      <label for="name">Nombre:</label>
                      {!! Form::text('name', null, ['placeholder' => 'Nombre del Usuario', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      <label for="email">Correo:</label>
                      {!! Form::email('email', null, ['placeholder' => 'Correo del Usuario', 'class' => 'form-control', '']) !!}
                    </div>
                    <div class="form-group">
                      <label for="rol">Tipo de usuario:</label>
                      {!! Form::select('role', array('admin' => 'Administrador', 'editor' => 'Editor', 'user' => 'Usuario')) !!}
                    </div>

                    @if($var=='1')
                    <div class="form-group">
                      <label for="password">Contraseña:</label>
                      <input type="password" name="password" placeholder="Introduzca una Contraseña" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label for="password_confirmation">Confirmar Contraseña:</label>
                      <input type="password" name="password_confirmation" placeholder="Confirme la Contraseña" class="form-control" >
                    </div>
                      
                    @else

                    @endif
                    <button type="submit" class="btn btn-success">Aceptar</button>
                    {!! Form::close() !!}

                    <!--{!! Form::select('role',array('admin' => 'Administrador', 'editor' => 'Editor', 'user' => 'Usuario')) !!}-->