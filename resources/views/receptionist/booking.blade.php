<!-- resources/views/booking/guest-form.blade.php -->

@extends('receptionist.app')

@section('body')

    <h2>Form Booking Tamu</h2>
    <form action="/booking" method="post">
        @csrf
        <label for="guest_name">Nama Tamu:</label>
        <input type="text" name="guest_name" required><br>
        <label for="guest_phone">Nomor Telepon:</label>
        <input type="text" name="guest_phone" required><br>
        <label for="guest_address">Alamat:</label>
        <input type="text" name="guest_address" required><br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Daftar Tamu</h2>
    @foreach($guests as $guest)
        <p>Nama: {{ $guest->guest_name }} - Telepon: {{ $guest->guest_phone }} - Alamat: {{ $guest->guest_address }}</p>
    @endforeach

@endsection