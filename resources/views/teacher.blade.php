@extends('layout.mainlayout')
@section('title', 'Teacher')
@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h2>Selamat datang</h2>
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
                    <td><a href="teacher-detail/{{ $item->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
