@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Staff</h1>
    <hr />
    <form action="{{ route('staff.update', $staff->id_staff) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="staff_name" class="form-control" placeholder="Nama" value="{{ $staff->staff_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="staff_address" class="form-control" placeholder="Alamat" value="{{ $staff->staff_address }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No Hp</label>
                <input type="text" name="phone_number" class="form-control" placeholder="No Hp" value="{{ $staff->phone_number }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Departemen</label>
                <textarea class="form-control" name="id_department" placeholder="Departemen" >{{ $staff->id_department }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="position" class="form-control" placeholder="Jabatan" value="{{ $staff->position }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection