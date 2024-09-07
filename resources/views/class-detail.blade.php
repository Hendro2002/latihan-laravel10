@extends('layout.mainlayout')
@section('title', 'Detail Kelas')
@section('content')
    <h1>Ini Halaman Detail Kelas {{ $class->name }}</h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td>{{ $class->name }}</td>
            </tr>
            <tr>
                <td>Homeroom Theacer</td>
                <td>{{ $class->homeroomTeacher->name }}</td>
            </tr>
            <tr>
                <td>Siswa</td>
                {{-- <td>{{$class->students->name}}</td> --}}
                <td>
                    <ol>
                        @foreach ($class->students as $item)
                            <li>{{ $item->name }}</li>
                        @endforeach
                    </ol>
                </td>
            </tr>

        </table>
    </div>
    <style>
        td {
            padding: 10px;
            width: 50%;
        }
    </style>
@endsection
