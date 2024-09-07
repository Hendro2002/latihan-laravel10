@extends('layout.mainlayout')
@section('title', 'Detail Siswa')
@section('content')
    <h1>Ini Halaman Detail Siswa yang bernama {{ $student->name }}</h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>{{ $student->nis }}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    @if ($student->gender == 'P')
                        Perempuan
                    @else
                        Laki-Laki
                    @endif
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>{{ $student->class->name }}</td>
            </tr>
            <tr>
                <td>Homeroom Teacher</td>
                <td>{{ $student->class->homeroomTeacher->name }}</td>
            </tr>
            <tr>
                <td>Extracurricular</td>
                <td>
                    <ol>
                        @foreach ($student->extracurriculars as $item)
                            <li>- {{ $item->name }}</li>
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
