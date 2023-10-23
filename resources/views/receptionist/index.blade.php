@extends('receptionist.app')

@php
    $availableRooms = $availableRooms ?? [];
    $availableRooms = json_encode($availableRooms);
    $countRooms = $availableRooms;
@endphp

@section('body')
    <div class="mt-[3em] mx-[6em]">
        {{-- Form Tanggal --}}
        <form class="flex" action="{{ route('receptionist.roomAvailable') }}" method="post">
            @csrf
            <div class="flex flex-col mr-4">
                <label for="start_date">Tanggal Awal:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            
            <div class="flex flex-col">
                <label for="end_date">Tanggal Akhir:</label>
                <input type="date" id="end_date" name="end_date" required><br>
            </div>

            <button class="ml-10" type="submit">Cari Kamar Tersedia</button>
        </form>

        {{-- Pilih Roomtype --}}
        <div class="flex mb-3">
            <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="pokoke-turu" onclick="roomGroupBy(3)">
                <div class="flex p-2 w-[11.5em]">
                    <div class="mr-3">
                        <img src="{{ asset('images/image 5.svg') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="font-black text-xl text-center" id="data_PokokeTuru">
                            0
                        </div>
                        <div class="text-l text-center">
                            Pokoke Turu
                        </div>
                    </div>
                </div>
            </a>
            <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="rodok-deluxe" onclick="roomGroupBy(2)">
                <div class="flex p-2 w-[11.5em]">
                    <div class="mr-3">
                        <img src="{{ asset('images/image 5.svg') }}" alt="">
                    </div>
                    <div class="flex-col">
                        <div class="font-black text-xl text-center" id="data_RodokDeluxe">
                            0
                        </div>
                        <div class="text-l text-center">
                            Rodok Deluxe
                        </div>
                    </div>
                </div>
            </a>
            <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="super-deluxe" onclick="roomGroupBy(1)">
                <div class="flex p-2 w-[11.5em]">
                    <div class="mr-3">
                        <img src="{{ asset('images/image 5.svg') }}" alt="">
                    </div>
                    <div class="flex-col">
                        <div class="font-black text-xl text-center" id="data_SuperDeluxe">
                            0
                        </div>
                        <div class="text-l text-center">
                            Super Deluxe
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Tabel Kamar Tersedia --}}
        <div class="flex justify-center mt-[2em]">
            <table class="table-auto border-collapse shadow-md rounded-lg">
                <thead class="items-center">
                    <tr>
                        <th class="px-5 py-3 border border-slate-300">#</th>
                        <th class="px-5 py-3 border border-slate-300 w-[7em]">id_Room</th>
                        <th class="px-5 py-3 border border-slate-300">Room Number</th>
                        <th class="px-5 py-3 border border-slate-300 w-[13em]">Room Type</th>
                        <th class="px-5 py-3 border border-slate-300 w-[6em]">Status</th>
                        <th class="px-5 py-3 border border-slate-300 w-[10em]">Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Choose Room Type</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    </div>
    

    {{-- Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var countRooms = JSON.parse(@json($countRooms));
            
            var pokokeTuruRooms = countRooms.filter(function (room) {return room.id_roomtype === 3 && room.status === "ready";});
            var rodokDeluxeRooms = countRooms.filter(function (room) {return room.id_roomtype === 2 && room.status === "ready";});
            var superDeluxeRooms = countRooms.filter(function (room) {return room.id_roomtype === 1 && room.status === "ready";});

            var countPokokeTuru = document.getElementById("data_PokokeTuru");
            var countRodokDeluxe = document.getElementById("data_RodokDeluxe");
            var countSuperDeluxe = document.getElementById("data_SuperDeluxe");
            
            countPokokeTuru.textContent = pokokeTuruRooms.length || 0;
            countRodokDeluxe.textContent = rodokDeluxeRooms.length || 0;
            countSuperDeluxe.textContent = superDeluxeRooms.length || 0;        
            
        });

        function roomGroupBy(idRoomType){
            var availableRooms = JSON.parse(@json($availableRooms));
            var start_date;
            var end_date;

            @if(isset($start_date))
                start_date = {!! json_encode($start_date) !!};
            @else
                start_date = null;
            @endif

            @if(isset($end_date))
                end_date = {!! json_encode($end_date) !!};
            @else
                end_date = null;
            @endif


            console.log(start_date, end_date);
            var tableBody = $('tbody');
            tableBody.empty();

            var filteredRooms = availableRooms.filter(function (room) {
                return room.id_roomtype === idRoomType && room.status === "ready";
            });

            var roomTypeName = "";
            if (idRoomType == 1) {
                roomTypeName = "Super Deluxe"
            } else if (idRoomType == 2) {
                roomTypeName = "Rodok Deluxe"
            } else {
                roomTypeName = "Pokoke Turu"
            }

            filteredRooms.forEach( function(room, index) {
                var rowClass = index % 2 === 0 ? 'bg-pink-100' : 'bg-white';
                var numm = index + 1;
                var idd = room.id_room;
                var row = '<tr class="' + rowClass + ' h-[3em]">' +
                        '<td class="text-center align-middle border border-slate-300">' + numm + '</td>' +
                        '<td class="text-center align-middle border border-slate-300">' + idd+ '</td>' +
                        '<td class="text-center align-middle border border-slate-300">' + room.room_number + '</td>' +
                        '<td class="text-center align-middle border border-slate-300">' + roomTypeName + '</td>' +
                        '<td class="text-center align-middle border border-slate-300">' + room.status + '</td>' +
                        '<td class="align-middle">' +
                        '<div class="text-center align-middle border border-slate-300">' +
                        '<a href="/booking/' + idd + '/' + start_date + '/' + end_date + '" class="btn btn-primary rounded-[8px] bg-[#DC4295] text-white py-1 px-4">Pilih</a>' +
                        '</div>' +
                        '</td>' +
                        '</tr>';

                tableBody.append(row);
                
            });
        }
    </script>

@endsection