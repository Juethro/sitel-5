@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 shadow p-4 rounded font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-80 sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>Edit Staff</h1>
        </div>
        <hr class="w-full mt-4 mb-6">

    <div class="max-w-md">
        <div class="grid grid-2 gap-4">    
        <form action="{{ route('staff.update', $staff->id_staff) }}" method="POST" class="w-full space-y-4">
            @csrf
            @method('PUT')

            <div class="bg-white p-4 rounded shadow-lg">
                <label class="block text-sm font-medium text-gray-600 mb-1">Nama:</label>
                <input type="text" name="staff_name" class="mt-2 p-2 border rounded w-full" placeholder="Nama" value="{{ $staff->staff_name }}">
            </div>

            <div class="bg-white p-4 rounded shadow-lg">
                <label class="block text-sm font-medium text-gray-600 mb-1">Alamat:</label>
                <input type="text" name="staff_address" class="mt-2 p-2 border rounded w-full" placeholder="Alamat" value="{{ $staff->staff_address }}">
            </div>

            <div class="bg-white p-4 rounded shadow-lg">
                <label class="block text-sm font-medium text-gray-600 mb-1">No Hp:</label>
                <input type="text" name="phone_number" class="mt-2 p-2 border rounded w-full" placeholder="No Hp" value="{{ $staff->phone_number }}">
            </div>

            <div class="bg-white p-4 rounded shadow-lg">
                <label class="block text-sm font-medium text-gray-600 mb-1">Departemen:</label>
                <textarea class="mt-2 p-2 border rounded w-full" name="id_department" placeholder="Departemen">{{ $staff->id_department }}</textarea>
            </div>

            <div class="bg-white p-4 rounded shadow-lg">
                <label class="block text-sm font-medium text-gray-600 mb-1">Jabatan:</label>
                <input type="text" name="position" class="mt-2 p-2 border rounded w-full" placeholder="Jabatan" value="{{ $staff->position }}">
            </div>

            <div class="flex justify-center">
                <button class="px-6 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow" type="submit">Update</button>
            </div>
        </form>
        </div>
    </div>
    </div>
@endsection
