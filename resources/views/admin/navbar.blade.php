<div class="bg-[#EFE7E7] item-center flex justify-between">

    <!-- Kotak Navigasi -->
    <a href="{{ route('admin')}}" class="ml-3 p-4 flex items-center" >
        <img class="w-10 h-10 object-cover rounded-full" src="/images/profil_default.png">
        <h3 class="text-sm font-medium ml-3">Admin</h3>  
    </a>

    <!-- Profil User -->
    <div class="mr-3 p-4 gap-5 flex items-center" >
        <div class="bg-white inline-block rounded" style="box-shadow: 0 8px 0px rgba(220, 66, 149, 1)">
            <a href="{{ route('logout')}}" class="font-bold px-4 py-2">Logout</a>
        </div>
    </div>

</div>