@extends('admin.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-[300px] sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>List Rooms</h1>
        </div>
    </div>
    
    <hr />
    @if (Session::has('success'))
        <div class="" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="flex flex-col items-center m-16">
    <table class="bg-white shadow-md rounded-lg overflow-hidden w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-center">Id</th>
                <th class="py-2 px-4 text-center">Room Number</th>
                <th class="py-2 px-4 text-center">Room Type</th>
                <th class="py-2 px-4 text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @if($rooms->count() > 0)
                @foreach($rooms as $index => $rs)
                    <tr class="{{ $index % 2 === 0 ? 'bg-pink-100' : 'bg-white' }}">
                        <td class="py-2 px-4 text-center">{{ $rs->id_room }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->room_number }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->roomtype_name}}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->status }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="" colspan="5">Rooms not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
@endsection