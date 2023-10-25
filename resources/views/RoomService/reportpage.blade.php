@extends('RoomService.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 my-8 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">Room Service</h1>
            </div>
        </div>
    </div>
    <div class="flex-col justify-center items-center">
        <hr />
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="flex justify-center mt-[5px]">
            <table class="table-auto border-collapse shadow-md ">
                <thead class="items-center">
                    <tr >
                        <th class="p-5 border border-slate-300">#</th>
                        <th class="p-5 border border-slate-300">ID Report</th>
                        <th class="p-5 border border-slate-300">Nomor Kamar</th>
                        <th class="p-5 border border-slate-300 w-[32em]">Deskripsi</th>
                        <th class="p-5 border border-slate-300">Status</th>
                        <th class="p-5 border border-slate-300 w-40 py-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($reported->count() > 0)
                        @foreach ($reported as $key => $eachData)
                            <tr class="{{ $key% 2 === 0 ? 'bg-pink-100' : 'bg-white' }} h-[3em]">
                                <td class="text-center align-middle border border-slate-300">{{ $key + 1 }}</td>
                                <td class="text-center align-middle border border-slate-300 ">{{ $eachData->id_report }}</td>
                                <td class="text-center align-middle border border-slate-300">{{ $eachData->room_number }}</td>
                                <td class="text-center align-middle border border-slate-300">{{ $eachData->description }}</td>
                                <td class="text-center align-middle border border-slate-300">{{ $eachData->status }}</td>
                                <td class="text-center align-middle border border-slate-300">
                                    <form action="{{ route('room.update', ['id' => $eachData->id_room]) }} " method="POST">
                                        @csrf
                                        <button type="submit" class="rounded-[8px] bg-[#DC4295] text-white hover:text-black py-1 px-4">Ready</button>
                                    </form>                              
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