<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/css/app.css')

    <title>Receptionist</title>
</head>
<body>
    @include('receptionist.navbar')

    <div class="container m-0">
        @yield('body')
    </div>

</body>
</html>