<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Room Service</title>
</head>
<body>
    @include('RoomService.navbar')

    <div>
        @yield('body')
    </div>


</body>
</html>