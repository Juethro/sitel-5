@extends('staff.app_staff')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 mt-8 shadow p-4 rounded font-montserrat">
        <div class="bg-white inline-block rounded font-bold text-center w-80 sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
            <h1>Detail Staff</h1>
        </div>
        <hr class="w-full mt-4 mb-6">

        <div class="max-w-md">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded shadow text-center" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <label class="text-sm font-medium text-gray-600">Nama:</label>
                </div>
                <div class="bg-white p-4 rounded shadow" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <span class="text-lg font-semibold">{{ $staff->staff_name }}</span>
                </div>
                <div class="bg-white p-4 rounded shadow text-center" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <label class="text-sm font-medium text-gray-600">Alamat:</label>
                </div>
                <div class="bg-white p-4 rounded shadow" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <span class="text-lg font-semibold">{{ $staff->staff_address }}</span>
                </div>
                <div class="bg-white p-4 rounded shadow text-center" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <label class="text-sm font-medium text-gray-600">No Hp:</label>
                </div>
                <div class="bg-white p-4 rounded shadow" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <span class="text-lg font-semibold">{{ $staff->phone_number }}</span>
                </div>
                <div class="bg-white p-4 rounded shadow text-center" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <label class="text-sm font-medium text-gray-600">Departemen:</label>
                </div>
                <div class="bg-white p-4 rounded shadow" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <span class="text-lg font-semibold">{{ $staff->id_department }}</span>
                </div>
                <div class="bg-white p-4 rounded shadow text-center" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <label class="text-sm font-medium text-gray-600">Jabatan:</label>
                </div>
                <div class="bg-white p-4 rounded shadow" style="box-shadow: 1 10px 10px rgb(0, 0, 0)">
                    <span class="text-lg font-semibold">{{ $staff->position }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection