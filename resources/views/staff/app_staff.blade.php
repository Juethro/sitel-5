<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Sitel5</title>
  </head>
  <body>
    @include('staff.navbar')
 
    <div class="">
        @yield('body')
    </div>
 
  </body>
</html>