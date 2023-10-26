@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 shadow p-4 rounded font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-80 sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>Detail Staff</h1>
        </div>
        <hr class="w-full mt-4 mb-6">

        <div class="max-w-md">
            <div class="grid grid-cols-2 gap-3">
                <div class="flex">
                    <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Nama:</label>
                </div>
                <div class="">
                    <span class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">{{ $staff->staff_name }}</span>
                </div>
                <div class="flex">
                    <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Alamat:</label>
                </div>
                <div class="">
                    <span class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">{{ $staff->staff_address }}</span>
                </div>
                <div class="flex">
                    <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">No Hp:</label>
                </div>
                <div class="">
                    <span class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">{{ $staff->phone_number }}</span>
                </div>
                <div class="flex">
                    <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Departemen:</label>
                </div>
                <div class="">
                    <span class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">{{ $staff->id_department }}</span>
                </div>
                <div class="flex">
                    <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Jabatan:</label>
                </div>
                <div class="">
                    <span class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">{{ $staff->position }}</span>
                </div>
                <div class="justify-end mt-4">
                    <a href="{{ route('staff.index') }}" class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-5 rounded mr-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection