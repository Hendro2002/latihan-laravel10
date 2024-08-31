@extends('layout.mainlayout')
@section('title', 'Students')
@section('content')
    <h1>Ini Halaman Students</h1>
    <h2>Selamat datang</h2>
    <h3>Student List</h3>
    {{-- <ol>
        @foreach ($studentList as $data)
            <li>
                {{ $data->name }} | {{ $data->gender }} | {{ $data->nis }}
            </li>
        @endforeach
    </ol> --}}
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Kelas</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>

                    <td>{{ $data->class['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
