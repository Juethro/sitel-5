@extends('layouts.app_staff')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Staff</h1>
        <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah Staff</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Departement</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($staff->count() > 0)
                @foreach($staff as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id_staff }}</td>
                        <td class="align-middle">{{ $rs->staff_name }}</td>
                        <td class="align-middle">{{ $rs->staff_address }}</td>
                        <td class="align-middle">{{ $rs->phone_number }}</td>
                        <td class="align-middle">{{ $rs->id_department }}</td>
                        <td class="align-middle">{{ $rs->position }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('staff.show', $rs->id_staff) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('staff.edit', $rs->id_staff)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('staff.destroy', $rs->id_staff) }}" method="POST" type="button" class="btn btn-danger m-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Staff not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection