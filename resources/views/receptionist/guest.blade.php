@extends('receptionist.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 my-8 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">Daftar Tamu</h1>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <table class="table-auto border-collapse shadow-md ">
            <thead class="items-center">
                <tr >
                    <th class="p-5 border border-slate-300">#</th>
                    <th class="p-5 border border-slate-300">ID Tamu</th>
                    <th class="p-5 border border-slate-300 w-[15em]">Nama Tamu</th>
                    <th class="p-5 border border-slate-300 w-[15em]">No. Telp</th>
                    <th class="p-5 border border-slate-300 w-[20em] py-4">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @if($guests->count() > 0)
                    @foreach ($guests as $key => $eachData)
                        <tr class="{{ $key% 2 === 0 ? 'bg-pink-100' : 'bg-white' }} h-[3em]">
                            <td class="text-center align-middle border border-slate-300">{{ $key + 1 }}</td>
                            <td class="text-center align-middle border border-slate-300 ">{{ $eachData->id_guest }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->guest_name }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->guest_phone }}</td>
                            <td class="text-center align-middle border border-slate-300">{{ $eachData->guest_address }}</td>
                            
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