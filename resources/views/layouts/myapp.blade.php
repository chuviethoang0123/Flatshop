<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">

      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>Welcome to FlatShop | @yield('title')</title>
      
      @include('partials.css')
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body>
   @include('partials.header')

   @yield('content')

   @include('partials.footer')

   @include('partials.js')

   </body>

</html>