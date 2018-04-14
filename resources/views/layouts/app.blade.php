<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>

    <div>
        <main>
        
            <aside id="side-menu" class="side-nav fixed">
                <ul>
                    <li>

                        <div class="background">
                            <img src="{{ asset('img/bg-menu.jpg')}}">
                            <h1>{{ config('app.name', 'NAS') }}</h1>
                        </div>

                    </li>
                    <li>
                        <a href="#!">
                            <i class="material-icons">cloud</i>First Link With Icon</a>
                    </li>
                    <li>
                        <a href="#!">Second Link</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a class="subheader">Subheader</a>
                    </li>
                    <li>
                        <a class="waves-effect" href="#!">Third Link With Waves</a>
                    </li>
                </ul>
            </aside>
            <a href="#" data-activates="side-menu" class="button-collapse  waves-effect waves-light hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
            @yield('content')
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-qrcode.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
</body>

</html>