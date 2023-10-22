@extends('RoomService.app')

@section('body')
    <div class="container min-h-screen flex items-center justify-center bg-white ">
        <div class="mt-32 mb-128 ml-64">
            <h1 class="text-3xl font-medium">Housekeeper</h1>
        </div>
        <hr />
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="flex justify-center mt-p">
        <table class="table-auto border-collapse">
        <thead class="items-center">
            <tr >
                <th class="p-5 border border-slate-300">ID Kamar</th>
                <th class="p-5 border border-slate-300">Nomer Kamar</th>
                <th class="p-5 border border-slate-300">Status</th>
                <th class="p-5 border border-slate-300 w-40 py-4">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($data->count() > 0)
                @foreach($data as $eachData)
                    <tr>
                        <td class="text-center align-middle border border-slate-300 ">{{ $eachData->id_booking }}</td>
                        <td class="text-center align-middle border border-slate-300">{{ $eachData->room_number }}</td>
                        <td class="text-center align-middleb order border-slate-300">{{ $eachData->status }}</td>
                        <td class="text-center align-middle border border-slate-300 flex justify-around">
                            <a href="{{ route('room.update', ['id' => $eachData->id_room]) }}" class="btn btn-primary rounded-[12px] bg-[#DC4295] text-white p-2 ps-2">Ready</a>
                            <a href="{{ route('room.report', ['roomId' => $eachData->id_room]) }}" class="btn btn-primary rounded-[12px] bg-[#DC4295] text-white p-2 pe-2">Report</a>
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

    </div>
  
@endsection
