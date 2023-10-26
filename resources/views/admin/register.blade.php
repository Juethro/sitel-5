@extends('admin.app')

@section('body')
    <div class="flex flex-col items-center justify-center space-y-4 my-8 font-montserrat">
        <div style="box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5)">
            <div class="bg-white inline-block rounded font-bold text-center w-[22em] " style="box-shadow: 0 6px 0px rgba(220, 66, 149, 1)">
                <h1 class="text-[28px]">Register Account</h1>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="max-w-md">
            <div class="grid grid-2 gap-4">
                <form action="{{ Route('admin.addUser') }}" method="POST" class="w-full space-y-4">
                    @csrf
    
                    <div class="flex">
                        <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Username:</label>
                        <input type="text" name="username" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Nama" required>
                    </div>
    
                    <div class="flex">
                        <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Password:</label>
                        <input type="password" name="passw" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10" placeholder="Password" required>
                    </div>
                    
                    <div class="flex">
                        <label class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-40 h-10 text-center">Role:</label>
                        <select name="role" class="bg-white p-3 rounded shadow-lg block text-sm font-medium text-gray-600 mb-1 mr-6 w-80 h-10">
                            <option value="receptionist">Resepsionis</option>
                            <option value="hrd">Human Resource</option>
                            <option value="roomservice">Room Service</option>
                            <option value="admin">Admin</option>
                            <!-- Tambahkan opsi sesuai dengan kebutuhan Anda -->
                        </select>
                    </div>
    
                    <div class="flex justify-end">
                        <button class="px-6 py-2 bg-[#DC4295] text-white rounded hover:text-black focus:outline-none focus:shadow-outline-blue" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection