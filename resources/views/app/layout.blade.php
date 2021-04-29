<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Live-Wire</title>
    <style>
      .footer{
        padding-top: 20px !important;
        padding-bottom: 20px !important;
        position:absolute;
        bottom:0px;
        overflow:hidden;
      }
    </style>

</head>
<body>
      @include('app._menu')



      @yield('content')

      

      @include('app._footer')
      <script src="{{ asset('js/app.js')}}"></script>
      @livewireScripts
    </body>
</html>