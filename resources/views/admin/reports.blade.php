<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports's and Analytics</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head> -->

@extends('admin.app')

@section('body')

<body class="h-screen bg-gray-100">

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $lineChartProfit->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $lineChartRooms->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $barChartProfit->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $pieChartRooms->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $barChartRooms->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 rounded shadow">
        {!! $barChartGuestCity->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 mx-2 rounded shadow">
        {!! $BarChartTopGuest->container() !!}
    </div>
</div>

<div class="container px-4 mx-auto">
    <div class="p-6 mx-2 rounded shadow">
        {!! $barChartWaktuMenginap->container() !!}
    </div>
</div>



<script src="{{ $lineChartRooms->cdn() }}"></script>
<script src="{{ $lineChartProfit->cdn() }}"></script>
<script src="{{ $barChartProfit->cdn() }}"></script>
<script src="{{ $barChartRooms->cdn() }}"></script>
<script src="{{ $barChartGuestCity->cdn() }}"></script>
<script src="{{ $BarChartTopGuest->cdn() }}"></script>
<script src="{{ $barChartWaktuMenginap->cdn() }}"></script>
<script src="{{ $pieChartRooms->cdn() }}"></script>

{{ $lineChartProfit->script() }}
{{ $lineChartRooms->script() }}
{{ $barChartProfit->script() }}
{{ $barChartRooms->script() }}
{{ $barChartGuestCity->script() }}
{{ $BarChartTopGuest->script() }}
{{ $barChartWaktuMenginap->script() }}
{{ $pieChartRooms->script() }}
</body>
@endsection