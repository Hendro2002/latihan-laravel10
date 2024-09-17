@extends('layout.mainlayout')
@section('title', 'Teacher')
@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h2>Selamat datang</h2>
    <div class="mb-5">
        <a href="teacher-add"class="btn btn-primary">Add Data</a>
    </div>
    @if (Session::has('status-add'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message-add') }}
        </div>
    @endif

    @if (Session::has('status-update'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message-update') }}
        </div>
    @endif
    <h3>Teacher List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Teacher</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="teacher-detail/{{ $item->id }}">Detail</a>
                        <a href="teacher-edit/{{ $item->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
