@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Check-In</h1>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID Booking</th>
                <th>Nomer Kamar</th>
                <th>Status</th>
                <th>Ready</th>
            </tr>
        </thead>
        <tbody>
            @if($data->count() > 0)
                @foreach($data as $eachData)
                    <tr>
                        <td class="align-middle">{{ $eachData->id_booking }}</td>
                        <td class="align-middle">{{ $eachData->room_number }}</td>
                        <td class="align-middle">{{ $eachData->status }}</td>
                        <td class="align-middle">
                            <a href="{{ route('room.update', ['id' => $eachData->id_room]) }}" class="btn btn-primary">Ready</a>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('show.form', ['roomId' => $eachData->id_room]) }}" class="btn btn-primary">Report</a>
                        </td>
                        </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Checkout not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
