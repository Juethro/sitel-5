@extends('admin.app')

@section('body')
<div class="flex justify-center">
  <div class=" bg-600 p-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16" >
        <a  href="{{ route('admin.viewUsers')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_user.png" class="w-10 mr-6">
            <p>View All Users Account</p>
        </a>
        <a href="{{ route('admin.viewStaff')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_staff.png" class="w-10 mr-6">
            <p>View All Hotel Staff's</p>
        </a>
        <a href="{{ route('admin.viewRooms')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_room.png" class="w-10 mr-6">
            <p>View All Hotel Room's Status</p>
        </a>
        <a href="{{ route('admin.viewCheckIn')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_ci.png" class="w-10 mr-6">
            <p>View All Check-In Log</p>
        </a>
        <a href="{{ route('admin.viewCheckOut')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_co.png" class="w-10 mr-6">
            <p>View All Check-Out Log</p>
        </a>
        <a href="{{ route('admin.HK')}}" class="p-4 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/view_hk.png" class="w-10 mr-6">
            <p>View Housekeeper's </p>
        </a>
    </div>
    <div>
    <a href="{{ route('admin.reports')}}" class="p-4 mt-16 flex text-sm font-bold items-center bg-white h-20 rounded-[20px] shadow-[0px_10px_8px_-2px_rgba(0,0,0,0.6)] justify-center">
            <img src="images/report.jpg" class="w-20 mr-2">
            <p>View Reports's and Analytics </p>
        </a>
    </div>
  </div>
</div>


@endsection