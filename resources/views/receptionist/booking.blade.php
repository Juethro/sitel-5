<!-- resources/views/booking/guest-form.blade.php -->

@extends('receptionist.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 my-8 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">Formulir Tamu</h1>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center">
        <form class="rounded " action="{{ route('booking.add', ['id' => $id, 'startDate' => $startDate,'endDate' => $endDate]) }}" method="post">
            @csrf
            <table class="mb-4">
                <tr class="h-10">
                    <td><label class="mr-4" for="guest_name">Nama Tamu:</label></td>
                    <td><input style="box-shadow: 0 3px 4px rgba(0, 0, 0, 0.5)" type="text" name="guest_name" required></td>
                </tr>
                <tr class="h-10">
                    <td><label class="mr-10" for="guest_phone">Nomor Telepon:</label></td>
                    <td><input style="box-shadow: 0 3px 4px rgba(0, 0, 0, 0.5)" type="text" name="guest_phone" required></td>
                </tr>
                <tr class="h-10">
                    <td><label for="guest_address">Alamat:</label></td>
                    <td><input style="box-shadow: 0 3px 4px rgba(0, 0, 0, 0.5)" type="text" name="guest_address" required></td>
                </tr>
            </table>
            
            <div class="flex justify-end">
                <div class="bg-[#DC4295] px-4 py-1 rounded-[8px] shadow-lg text-white hover:text-black">
                    <input class="" type="submit" value="Simpan">
                </div>
            </div>
        </form>    
    </div>
@endsection