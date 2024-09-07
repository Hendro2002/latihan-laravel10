@extends('layout.mainlayout')
@section('title', 'Teacher Detail')
@section('content')
    <h1>Ini Halaman Teacher {{ $teacher->name }}</h1>
    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td>{{ $teacher->name }}</td>
            </tr>
            <tr>
                <td>kelas</td>
                {{-- <td>{{ $teacher->class->name }}</td> --}}
                <td>
                    @if ($teacher->class)
                        {{ $teacher->class->name }}
                    @else
                        none
                    @endif
                </td>
            </tr>
            <tr>
                <td>Siswa</td>
                <td>
                    @if ($teacher->class)
                        <ol>
                            @foreach ($teacher->class->students as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ol>
                    @else
                        none
                    @endif
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
