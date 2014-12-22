<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zebra</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom_bs.css')}}">
</head>
<body>

  @include('layouts._header')  <!-- header partial //-->

  <div class="container wrapper"> 
     @yield('content')
  </div>    

<script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/application.js')}}"></script>
</body>
</html>