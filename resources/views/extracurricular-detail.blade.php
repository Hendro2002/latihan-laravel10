@extends('layout.mainlayout')
@section('title', 'Detail Ekstarkulikuler')
@section('content')
    <h1>Ini Halaman Detail Ekstarkulikuler {{ $ekskul->name }}</h1>

    <div class="mt-5">
        <table class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td>{{ $ekskul->name }}</td>
            </tr>

            <tr>
                <td>Siswa</td>
                <td>
                    <ol>
                        @foreach ($ekskul->students as $item)
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
