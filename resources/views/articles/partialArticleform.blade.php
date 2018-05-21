        @include('articles._errors')

        {!! Form::open(['action' => 'ArticleController@store','files' => true]) !!}
                         
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', null, ['class' => 'form-control',
                'placeholder' => 'Título del artículo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category',
                'placeholder' => 'Seleccione una opción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control textarea-content',
                'placeholder' => 'Contenido del artículo', 'required']) !!}
        </div>

        <div class="form-group col-md-7">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image') !!}
        </div>

        {!! Form::submit('Crear artículo', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
