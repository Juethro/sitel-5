@extends('receptionist.app')

@php
    $availableRooms = $availableRooms ?? [];
    $availableRooms = json_encode($availableRooms);
@endphp

@section('body')

    {{-- Form Tanggal --}}
    <form action="{{ route('receptionist.roomAvailable') }}" method="post">
        @csrf
        <label for="start_date">Tanggal Awal:</label>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="end_date">Tanggal Akhir:</label>
        <input type="date" id="end_date" name="end_date" required><br>

        <button type="submit">Cari Kamar Tersedia</button>
    </form>

    {{-- Pilih Roomtype --}}
    <div>
        <button id="pokoke-turu" onclick="roomGroupBy(3)">Pokoke Turu</button>
        <button id="rodok-deluxe" onclick="roomGroupBy(2)">Rodok Deluxe</button>
        <button id="super-deluxe" onclick="roomGroupBy(1)">Super Deluxe</button>
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
                <td>No Data</td>
            </tr>
        </tbody>
    </table>

    {{-- Script --}}
    <script>

        function roomGroupBy(idRoomType){
            var availableRooms = JSON.parse(@json($availableRooms));

            var tableBody = $('tbody');
            tableBody.empty();

            var filteredRooms = availableRooms.filter(function (room) {
                return room.id_roomtype === idRoomType;
            });

            var roomTypeName = "";
            if (idRoomType == 1) {
                roomTypeName = "Super Deluxe"
            } else if (idRoomType == 2) {
                roomTypeName = "Rodok Deluxe"
            } else {
                roomTypeName = "Pokoke Turu"
            }

            filteredRooms.forEach( function(room) {
                var row = '<tr>' +
                    '<td class="align-middle">' + room.id_room + '</td>' +
                    '<td class="align-middle">' + room.room_number + '</td>' +
                    '<td class="align-middle">' + roomTypeName + '</td>' +
                    '<td class="align-middle">' + room.status + '</td>' +
                    '<td class="align-middle">' +
                    '<div class="btn-group" role="group" aria-label="Basic example">' +
                    '<button href="#" type="button" class="btn btn-secondary">Pilih</button>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                tableBody.append(row);
            });
        };

    </script>

@endsection