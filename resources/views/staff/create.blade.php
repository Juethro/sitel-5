@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Staff Baru</h1>
    <hr />
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="staff_name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="staff_address" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone_number" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="col">
                <input class="form-control" name="id_department" placeholder="Departement">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="position" class="form-control" placeholder="Jabatan">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection