@extends('RoomService.app')

@section('body')
    <div class="flex justify-center h-[70vh] items-center ">
        <div class="bg-white w-[600px] rounded-[12px] h-min p-5" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5)">
            <div class="flex justify-center">
                <h1 class="text-3xl font-medium">Report</h1>
            </div>
            <div class="mt-5">
                <form action="{{route('submit.form', $id)}}" method="POST" >
                    @csrf
                    <div class="flex flex-col">
                        <div>
                            <label for="description">Deskripsi Masalah:</label><br>
                            <textarea class="resize-y rounded-md w-full shadow-inner border-4 border-black focus:border-[#DC4295]" id="description" name="description" rows="4" cols="50" required></textarea><br><br>
                        </div>
                                                
                        <div class="text-white hover:text-black">
                            <button type="submit" class="submit-btn btn btn-primary rounded-[8px] bg-[#DC4295] py-1 px-4 float-right mr-5">Submit</button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
@endsection
