
@extends('layouts.myapp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h2>
                    Crear Articulo
                  </h2>
                </div>
                  <div class="card-body">

                    @include('articles.partialArticleForm')
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(".select-tag").chosen({
            disable_search_threshold: 3,
            placeholder_text_multiple: 'Seleccione un máximo de tres tasgs',
            max_selected_options: 3,
        });
        $(".select-category").chosen({});
        $('.textarea-content').trumbowyg({
            lang: 'es'
        });
    </script>
@endsection