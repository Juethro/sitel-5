@extends('RoomService.app')

@section('body')
    {{-- Judul --}}
    <div class="flex flex-col items-center justify-center space-y-4 my-8 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">House Keeper</h1>
            </div>
        </div>
    </div>
    <hr />

    {{-- Body --}}
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="flex justify-center">
        <table class="table-auto border-collapse">
            <thead class="items-center">
                <tr>
                    <th class="p-5 border border-slate-300">#</th>
                    <th class="p-5 border border-slate-300">ID Booking</th>
                    <th class="p-5 border border-slate-300">Nomor Kamar</th>
                    <th class="p-5 border border-slate-300 w-32">Status</th>
                    <th class="p-5 border border-slate-300 w-48 py-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($data->count() > 0)
                    @foreach ($data as $key => $eachData)
                        <tr class="{{ $key% 2 === 0 ? 'bg-pink-100' : 'bg-white' }} h-[3em]">
                            <td class="text-center align-middle border border-slate-300">{{ $key + 1 }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->id_booking }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->room_number }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->status }}</td>
                            <td class="text-center align-middle border border-slate-300">
                                <div class="flex justify-around">
                                    <form method="POST" action="{{ route('room.update', ['id' => $eachData->id_room]) }}">
                                        @csrf
                                        <button type="submit" class="rounded-[12px] bg-[#DC4295] text-white hover:text-black py-1 px-4">Ready</button>
                                    </form>
                                    <form method="GET" action="{{ route('room.report', ['id' => $eachData->id_room]) }}">
                                        @csrf
                                        <button type="submit" class="rounded-[12px] bg-[#DC4295] text-white hover:text-black py-1 px-4">Report</button>
                                    </form>
                                </div>
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
    </div>


@endsection
