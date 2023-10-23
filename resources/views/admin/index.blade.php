@extends('admin.app')

@section('body')
<div class="flex justify-center mt-12">
  <div class=" bg-600 p-10">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16" >
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_user.png" class="w-10 mr-6">
            <p>View User</p>
        </button>
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_staff.png" class="w-10 mr-6">
            <p>View Staff</p>
        </button>
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_room.png" class="w-10 mr-6">
            <p>View Rooms</p>
        </button>
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_ci.png" class="w-10 mr-6">
            <p>View Check-In</p>
        </button>
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_co.png" class="w-10 mr-6">
            <p>View Check-Out</p>
        </button>
        <button class="p-7 flex text-3xl font-bold items-center bg-white h-15 rounded-lg shadow-2xl">
            <img src="images/view_hk.png" class="w-10 mr-6">
            <p>View Housekeeper</p>
        </button>
    </div>
  </div>
</div>


@endsection