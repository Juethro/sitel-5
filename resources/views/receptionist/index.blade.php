@extends('receptionist.app')

@php
    $availableRooms = $availableRooms ?? [];
    $availableRooms = json_encode($availableRooms);
    $countRooms = $availableRooms;
@endphp

@section('body')
    <div class="mt-[2em] mx-[6em]">
        <div class="flex flex-col justify-center">
            {{-- Form Tanggal --}}
            <form class="flex items-end" action="{{ route('receptionist.roomAvailable') }}" method="post">
                @csrf
                <div class="flex flex-col mr-4">
                    <label for="start_date">Tanggal Awal:</label>
                    <div style="box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5)">
                        <input type="date" id="start_date" name="start_date" class="px-2" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)" required>
                    </div>
                </div>
                
                <div class="flex flex-col">
                    <label for="end_date">Tanggal Akhir:</label>
                    <div style="box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5)">
                        <input type="date" id="end_date" name="end_date" class="px-2" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)" required><br>
                    </div>
                </div>

                <div class="ml-5 relative">
                    <button type="submit" class="rounded-[8px] bg-[#DC4295] text-white py-1 px-4">Cari Kamar</button>
                </div>
            </form>

            {{-- Pilih Roomtype --}}
            <div class="flex mb-3 mt-5">
                <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="pokoke-turu" onclick="roomGroupBy(4)">
                    <div class="flex p-2 w-[11.5em]">
                        <div class="mr-3">
                            <img src="{{ asset('images/image 5.svg') }}" alt="">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="font-black text-xl text-center" id="data_PressRoom">
                                0
                            </div>
                            <div class="text-l text-center">
                                Press Room
                            </div>
                        </div>
                    </div>
                </a>
                <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="rodok-deluxe" onclick="roomGroupBy(3)">
                    <div class="flex p-2 w-[11.5em]">
                        <div class="mr-3">
                            <img src="{{ asset('images/image 5.svg') }}" alt="">
                        </div>
                        <div class="flex-col">
                            <div class="font-black text-xl text-center" id="data_DeluxeRoom">
                                0
                            </div>
                            <div class="text-l text-center">
                                Deluxe Room
                            </div>
                        </div>
                    </div>
                </a>
                <a class="mr-7 shadow-lg hover:shadow-2xl duration-300" id="super-deluxe" onclick="roomGroupBy(2)">
                    <div class="flex p-2 w-[11.5em]">
                        <div class="mr-3">
                            <img src="{{ asset('images/image 5.svg') }}" alt="">
                        </div>
                        <div class="flex-col">
                            <div class="font-black text-xl text-center" id="data_SuiteRoom">
                                0
                            </div>
                            <div class="text-l text-center">
                                Suite Room
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
                            <div class="font-black text-xl text-center" id="data_SingleRoom">
                                0
                            </div>
                            <div class="text-l text-center">
                                Single Room
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        

        {{-- Tabel Kamar Tersedia --}}
        <div class="flex justify-center mt-[2em]">
            <table class="table-auto border-collapse w-full shadow-md rounded-lg">
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
            /*var countRooms = JSON.parse(@json($availableRooms)); */
            var countRooms = {!! $countRooms !!};
            
            var PressRooms = Object.values(countRooms).filter(function (room) {return room.id_roomtype === 4 && room.status === "ready";});    
            var DeluxeRooms = Object.values(countRooms).filter(function (room) {return room.id_roomtype === 3 && room.status === "ready";});
            var SuiteRooms = Object.values(countRooms).filter(function (room) {return room.id_roomtype === 2 && room.status === "ready";});
            var SingleRooms = Object.values(countRooms).filter(function (room) {return room.id_roomtype === 1 && room.status === "ready";});

            var countPressRooms = document.getElementById("data_PressRoom");
            var countDeluxeRooms = document.getElementById("data_DeluxeRoom");
            var countSuiteRooms = document.getElementById("data_SuiteRoom");
            var countSingleRooms = document.getElementById("data_SingleRoom");
            
            countPressRooms.textContent = PressRooms.length || 0;
            countDeluxeRooms.textContent = DeluxeRooms.length || 0;
            countSuiteRooms.textContent = SuiteRooms.length || 0;        
            countSingleRooms.textContent = SingleRooms.length || 0;      
            
        });

        function roomGroupBy(idRoomType){
            var availableRooms = {!! $availableRooms !!};
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

            var tableBody = $('tbody');
            tableBody.empty();

            var filteredRooms = Object.values(availableRooms).filter(function (room) {
                return room.id_roomtype === idRoomType && room.status === "ready";
            });

            var roomTypeName = "";
            if (idRoomType == 1) {
                roomTypeName = "Single Room"
            } else if (idRoomType == 2) {
                roomTypeName = "Suite Room"
            } else if (idRoomType == 3){
                roomTypeName = "Deluxe Room"
            } else {
                roomTypeName = "Press Room"
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
                        '<a href="/booking/' + idd + '/' + start_date + '/' + end_date + '" class="rounded-[8px] bg-[#DC4295] text-white py-1 px-4">Pilih</a>' +
                        '</div>' +
                        '</td>' +
                        '</tr>';

                tableBody.append(row);
                
            });
            
        }
    </script>

@endsection