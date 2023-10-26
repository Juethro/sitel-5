@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-80 sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1 class="py-2">Staff Baru</h1>
        </div>
        <hr class="w-full mt-4 mb-6">

    <div class="max-w-md">
        <div class="grid grid-2 gap-4">
        <form action="{{ route('staff.store') }}" method="POST" class="w-full space-y-4">
            @csrf

            <div class="flex">
                <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Nama:</label>
                <input type="text" name="staff_name" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Nama">
            </div>

            <div class="flex">
                <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Alamat:</label>
                <input type="text" name="staff_address" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Alamat">
            </div>

            <div class="flex">
                <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">No Hp:</label>
                <input type="text" name="phone_number" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Nomor Hp">
            </div>

            <div class="flex">
                <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Departemen:</label>
                <input type="text" name="id_department" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Departemen">
            </div>

            <div class="flex">
                <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Jabatan:</label>
                <input type="text" name="position" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Jabatan">
            </div>

            <div class="flex justify-end">
                <a href="{{ route('staff.index') }}" class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-5 rounded mr-2">Back</a>
                <button class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-2 rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </div>
@endsection
