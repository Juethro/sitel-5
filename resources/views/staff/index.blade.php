@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-[300px] sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>List Staff</h1>
        </div>
    </div>
    <div class="flex justify-end">
        <div class="w-32 h-6 bg-[#DC4295] flex justify-center items-center rounded text-center text-white text-sm mb-4">
            <a href="{{ route('staff.create') }}">+ Tambah Staff</a>
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
                <th class="py-2 px-4 text-center">Nama</th>
                <th class="py-2 px-4 text-center">Alamat</th>
                <th class="py-2 px-4 text-center">Nomor Hp</th>
                <th class="py-2 px-4 text-center">Departement</th>
                <th class="py-2 px-4 text-center">Jabatan</th>
                <th class="py-2 px-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($staff->count() > 0)
                @foreach($staff as $index => $rs)
                    <tr class="{{ $index % 2 === 0 ? 'bg-pink-100' : 'bg-white' }}">
                        <td class="py-2 px-4 text-center">{{ $rs->id_staff }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->staff_name }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->staff_address }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->phone_number }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->id_department }}</td>
                        <td class="py-2 px-4 text-center">{{ $rs->position }}</td>
                        <td class="py-2 px-4 text-center">
                            <div class="flex items-center justify-center space-x-2" role="group" aria-label="Basic example">
                                    <a href="{{ route('staff.show', $rs->id_staff) }}" type="button" class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-2 rounded">Detail</a>
                                    <a href="{{ route('staff.edit', $rs->id_staff)}}" type="button" class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-4 rounded">Edit</a>
                                    <form action="{{ route('staff.destroy', $rs->id_staff) }}" method="POST" type="button" class="" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-2 rounded">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="" colspan="5">Staff not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
@endsection