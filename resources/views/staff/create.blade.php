@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-80 sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1 class="py-2">Staff Baru</h1>
        </div>
        <hr class="w-full mt-4 mb-6">

        <form action="{{ route('staff.store') }}" method="POST" class="w-full space-y-4">
            @csrf

            <div class="bg-white p-4 rounded shadow" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1)">
                <label class="block text-sm font-medium text-gray-600 mb-1">Nama:</label>
                <input type="text" name="staff_name" class="mt-2 p-2 border rounded w-full" placeholder="Nama">
            </div>

            <div class="bg-white p-4 rounded shadow" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1)">
                <label class="block text-sm font-medium text-gray-600 mb-1">Alamat:</label>
                <input type="text" name="staff_address" class="mt-2 p-2 border rounded w-full" placeholder="Alamat">
            </div>

            <div class="bg-white p-4 rounded shadow" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1)">
                <label class="block text-sm font-medium text-gray-600 mb-1">No Hp:</label>
                <input type="text" name="phone_number" class="mt-2 p-2 border rounded w-full" placeholder="Nomor Hp">
            </div>

            <div class="bg-white p-4 rounded shadow" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1)">
                <label class="block text-sm font-medium text-gray-600 mb-1">Departemen:</label>
                <input type="text" name="id_department" class="mt-2 p-2 border rounded w-full" placeholder="Departemen">
            </div>

            <div class="bg-white p-4 rounded shadow" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1)">
                <label class="block text-sm font-medium text-gray-600 mb-1">Jabatan:</label>
                <input type="text" name="position" class="mt-2 p-2 border rounded w-full" placeholder="Jabatan">
            </div>

            <div class="flex justify-center">
                <button class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
