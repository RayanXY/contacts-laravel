<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <title>Contacts App</title>
      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         @yield('content')
      </div>

      <script src="{{ asset('js/app.js') }}" type="text/js"></script>
   </body>
</html>