@extends('receptionist.app')

@php
    $availableRooms = $availableRooms ?? [];
    $availableRooms = json_encode($availableRooms);
@endphp

@section('body')

    {{-- Form Tanggal --}}
    <form action="{{ route('roomAvailable') }}" method="post">
        @csrf
        <label for="start_date">Tanggal Awal:</label>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="end_date">Tanggal Akhir:</label>
        <input type="date" id="end_date" name="end_date" required><br>

        <button type="submit">Cari Kamar Tersedia</button>
    </form>

    {{-- Pilih Roomtype --}}
    <div>
        <button>Pokoke Turu</button>
        <button>Rodok Deluxe</button>
        <button>Super Deluxe</button>
    </div>


    {{-- Tabel Kamar Tersedia --}}
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>id_Room</th>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Status</th>
                <th>Pilih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="id-kamar">id</td>
                <td class="nomer-kamar">nomer kamar</td>
                <td class="tipe-kamar">tipe kamar</td>
                <td class="status-kamar">status kamar</td>
                <td class="tombol-pilih">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button href="#" type="button" class="btn btn-secondary">Pilih</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- Script --}}
    <script>
        var availableRooms = @json($availableRooms);

        var tableBody = $('tbody');
        tableBody.empty();

        availableRooms.forEach(
            function(room) {
                var row = '<tr>' +
                    '<td class="align-middle">' + room.id_room + '</td>' +
                    '<td class="align-middle">' + room.room_number + '</td>' +
                    '<td class="align-middle">' + room.roomtype + '</td>' +
                    '<td class="align-middle">' + room.status + '</td>' +
                    '<td class="align-middle">' +
                    '<div class="btn-group" role="group" aria-label="Basic example">' +
                    '<button href="#" type="button" class="btn btn-secondary">Pilih</button>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                tableBody.append(row);
            }
        );

    </script>

@endsection