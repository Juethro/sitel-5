@extends('receptionist.app')

@section('body')
<div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
    <h1 class="bg-white inline-block rounded font-bold text-center w-[300px] sm:text-lg md:text-xl lg:text-2xl xl:text-3xl"
    style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">List Check Out</h1>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="flex flex-col items-center m-20">
    <table class="mt-4 bg-white shadow-md rounded-lg overflow-hidden w-full">
        <thead class="table-primary">
            <tr>
                <th class="py-2 px-4 text-center">ID Booking</th>
                <th class="py-2 px-4 text-center">Nama Tamu</th>
                <th class="py-2 px-4 text-center">Tanggal Booking</th>
                <th class="py-2 px-4 text-center">Tanggal Awal</th>
                <th class="py-2 px-4 text-center">Tanggal Selesai</th>
                <th class="py-2 px-4 text-center">Tipe Kamar</th>
                <th class="py-2 px-4 text-center">Harga</th>
                <th class="py-2 px-4 text-center">Check Out</th>
            </tr>
        </thead>
        <tbody>
            @if($checkouttable->count() > 0)
                @foreach($checkouttable as $index => $bk)
                    <tr class="{{ $index % 2 === 0 ? 'bg-pink-100' : 'bg-white' }}">
                        <td class="py-2 px-4 text-center">{{ $bk->id_booking }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->guest_name }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->booking_date }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->start_date }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->finish_date }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->roomtype_name }}</td>
                        <td class="py-2 px-4 text-center">{{ $bk->total_pay }}</td>
                        <td class="py-2 px-4 text-center">
                            <a href="{{ route('check-out-room', ['roomId' => $bk->id_room]) }}" class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-2 rounded">Check Out</a>
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
    </div>
@endsection