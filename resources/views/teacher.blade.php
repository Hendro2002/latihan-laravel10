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
                <th>Theacer</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
