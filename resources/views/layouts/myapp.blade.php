<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koci-Blogs') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <ul class="nav nav-tabs">
            
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ url('/') }}">{{ config('app.name', 'Koci-Blogs') }}</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="{!! url('/home') !!}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ URL::previous() }}">Volver</a>
          </li>

          <ul class="nav nav-tabs pull-right">
          <li class="nav-item">
            @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
            @else
            <li class="nav-item dropdown">

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
             </li>
            @endguest
          </li>
      </ul>
    </ul>
</div>
        <main class="py-4">
            @yield('content')
        </main>

@yield('scripts')
</body>
</html>
