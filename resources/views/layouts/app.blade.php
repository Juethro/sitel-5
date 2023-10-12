//resources/views/layouts/app.blade.php
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Sitel5</title>
      </head>
  <body>
    @include('layouts.navbar')
 
    <div class="container py-5">
        @yield('body')
    </div>
 
  </body>
</html>