<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SOHIS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/sohis-logo.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" /> --}}
    <!-- Pogo Slider CSS -->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/pogo-slider.min.css')}}" /> --}}
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/carousel.css')}}">