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
    
    <div class="flex flex-col items-center justify-center space-y-4 my-8 mt-96 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">Broken Rooms</h1>
            </div>
        </div>
    </div>
    <div class="flex-col justify-center items-center mb-24">
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
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">reports not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
