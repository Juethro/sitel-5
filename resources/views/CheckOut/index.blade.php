@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Check Out</h1>
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
                <th>Nama Tamu</th>
                <th>Tanggal Booking</th>
                <th>Tanggal Awal</th>
                <th>Tanggal Selesai</th>
                <th>Tipe Kamar</th>
                <th>Harga</th>
                <th>Check Out</th>
            </tr>
        </thead>
        <tbody>
            @if($checkouttable->count() > 0)
                @foreach($checkouttable as $bk)
                    <tr>
                        <td class="align-middle">{{ $bk->id_booking }}</td>
                        <td class="align-middle">{{ $bk->guest_name }}</td>
                        <td class="align-middle">{{ $bk->booking_date }}</td>
                        <td class="align-middle">{{ $bk->start_date }}</td>
                        <td class="align-middle">{{ $bk->finish_date }}</td>
                        <td class="align-middle">{{ $bk->roomtype_name }}</td>
                        <td class="align-middle">{{ $bk->total_pay }}</td>
                        <td class="align-middle">
                            <a href="{{ route('check-out-room', ['roomId' => $bk->id_room]) }}" class="btn btn-primary">Check Out</a>
                        </td>
                        </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Bookings not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection