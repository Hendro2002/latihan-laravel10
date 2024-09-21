@extends('layout.mainlayout')
@section('title', 'Detail Guru')
@section('content')
    <div class="container my-3">
        <a href="/guru/teacher" class="btn btn-primary">Kembali</a>

        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Detail Guru {{ $teacher->name }}</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $teacher->name }}</td>
                        </tr>

                        <tr>
                            <th>Kelas</th>
                            {{-- <td>{{ $teacher->class->name }}</td> --}}
                            <td>
                                @if ($teacher->class)
                                    {{ $teacher->class->name }}
                                @else
                                    Tidak ada kelas
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>Siswa</th>
                            <td>
                                @if ($teacher->class)
                                    <ol>
                                        @foreach ($teacher->class->students as $item)
                                            <li>{{ $item->name }}</li>
                                        @endforeach
                                    </ol>
                                @else
                                    Tidak ada murid
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
