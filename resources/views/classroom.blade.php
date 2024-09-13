@extends('layout.mainlayout')
@section('title', 'Class Room')
@section('content')
    <h1>Ini Halaman Class Room</h1>
    <h2>Selamat datang</h2>
    <div class="mb-5">
        <a href="class-add" class="btn btn-primary">Add Data</a>
    </div>
    <h3>Class List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kelas</th>
                {{-- <th>Students</th>
                <th>Homeroom Teacher</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    {{-- <td>
                        @foreach ($data->students as $student)
                            {{-- - {{ $student['name'] }} <br> --}}
                    {{-- - {{ $student->name }} <br> --}}
                    {{-- @endforeach
                    </td> --}}
                    {{-- <td>{{ $data->homeroomTeacher->name }}</td> --}}
                    <td>
                        <a href="class-detail/{{ $data->id }}">Detail</a>
                        <a href="class-edit/{{ $data->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
