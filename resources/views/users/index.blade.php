<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart Sample</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen bg-gray-100">

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 rounded shadow">
        {!! $lineChart->container() !!}
    </div>
    
</div>

<div class="container px-4 mx-auto">

    <div class="p-6 m-20 rounded shadow">
        {!! $barChart->container() !!}
    </div>
    
</div>


<script src="{{ $lineChart->cdn() }}"></script>

{{ $lineChart->script() }}
{{ $barChart->script() }}
</body>
</html>