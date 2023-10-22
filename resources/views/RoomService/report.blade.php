@extends('RoomService.app')
@section('body')
    <div class="flex justify-center h-screen items-center ">
        <div class="bg-white w-[600px] rounded-[12px] drop-shadow-md h-[40vh]">
            <section class="">
                <div class="ml-5">
                    <h1 class="text-3xl font-medium mt-5">Report</h1>
                </div>

                @if ($message = Session::get('message'))
                    <p>{{ $message }}</p>
                @endif

                <form action="{{route('submit.form', $id)}}" method="POST" >
                    @csrf
                    <div class="ml-[55px] mt-7">
                        <label for="description">Deskripsi Keluhan:</label><br>
                        <textarea class="resize-y rounded-md" id="description" name="description" rows="4" cols="50" required></textarea><br><br>
                    </div>
                    <div>
                        <button type="submit" class="submit-btn btn btn-primary rounded-[8px] bg-[#DC4295]  p-2 ps-2 float-right mr-5">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
