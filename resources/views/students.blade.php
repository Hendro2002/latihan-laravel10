@extends('layout.mainlayout')
@section('title', 'Students')
@section('content')
    <h1>Ini Halaman Students</h1>
    <h2>Selamat datang</h2>
    <h3>Student List</h3>
    <ol>
        @foreach ($studentList as $data)
            <li>
                {{ $data->name }} | {{ $data->gender }} | {{ $data->nis }}
            </li>
        @endforeach
    </ol>
@endsection
