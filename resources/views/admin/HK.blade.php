@extends('admin.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-[300px] sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>Dirty Rooms</h1>
        </div>
    </div>
    
    <hr />
    @if (Session::has('success'))
        <div class="" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="flex flex-col items-center m-20">
    <table class="mt-4 bg-white shadow-md rounded-lg overflow-hidden w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-center">#</th>
                <th class="py-2 px-4 text-center">Id Booking</th>
                <th class="py-2 px-4 text-center">Nomor Kamar</th>
                <th class="py-2 px-4 text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @if($data->count() > 0)
                @foreach($data as $key => $eachData)
                    <tr class="{{ $key % 2 === 0 ? 'bg-pink-100' : 'bg-white' }}">
                        <td class="py-2 px-4 text-center">{{ $key + 1 }}</td>
                        <td class="py-2 px-4 text-center">{{ $eachData->id_booking }}</td>
                        <td class="py-2 px-4 text-center">{{ $eachData->room_number }}</td>
                        <td class="py-2 px-4 text-center">{{ $eachData->status }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="" colspan="5">CheckOut not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
@endsection
