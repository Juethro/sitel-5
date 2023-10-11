@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Staff</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="staff_name" class="form-control" placeholder="Nama" value="{{ $staff->staff_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="staff_address" class="form-control" placeholder="Alamat" value="{{ $staff->staff_address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No Hp</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Nama" value="{{ $staff->phone_number }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Departemen</label>
            <input type="text" name="id_department" class="form-control" placeholder="Alamat" value="{{ $staff->id_department }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="position" class="form-control" placeholder="Nama" value="{{ $staff->position }}" readonly>
        </div>
    </div>
@endsection