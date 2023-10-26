@extends('admin.app')

@section('body')
    <div class="flex flex-col mx-[10em]">
        <div class="flex flex-col items-center justify-center space-y-4 mt-8 font-montserrat">
            <div class="bg-white inline-block rounded font-bold text-center w-[300px] sm:text-lg md:text-xl lg:text-2xl xl:text-3xl" style="box-shadow: 0 4px 0px rgba(220, 66, 149, 1)">
                <h1>User's Account</h1>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <div class="w-32 h-6 bg-[rgb(220,66,149)] flex justify-center items-center rounded text-center text-white text-sm mb-4">
                <a href="{{ route('admin.register') }}">+ Tambah User</a>
            </div>
        </div>
        <hr />
        <div class="flex justify-center">
            @if (Session::has('success'))
                <div class="" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
        
        <div class="flex flex-col items-center m-20">
            <table class="mt-4 bg-white shadow-md rounded-lg overflow-hidden w-full">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-center">Id</th>
                        <th class="py-2 px-4 text-center">Username</th>
                        <th class="py-2 px-4 text-center">Role</th>
                        <th class="py-2 px-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->count() > 0)
                        @foreach($users as $index => $rs)
                            <tr class="{{ $index % 2 === 0 ? 'bg-pink-100' : 'bg-white' }}">
                                <td class="py-2 px-4 text-center">{{ $rs->id }}</td>
                                <td class="py-2 px-4 text-center">{{ $rs->username }}</td>
                                <td class="py-2 px-4 text-center">{{ $rs->role }}</td>
                                <td class="py-2 px-4 text-center">
                                    <div>
                                        <form action="{{ Route('admin.delete', $rs->id) }}" type="button" method="post" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-[#DC4295] hover:bg-pink-700 text-white py-1 px-2 rounded" >Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="" colspan="5">Users not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@endsection