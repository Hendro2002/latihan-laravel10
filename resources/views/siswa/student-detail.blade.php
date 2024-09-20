@extends('layout.mainlayout')
@section('title', 'Detail Siswa {{ $student->name }}')
@section('content')
    <div class="container my-3">
        <a href="/siswa/students" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Detail Siswa {{ $student->name }}</h1>
                </center>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <td>{{ $student->nis }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>
                                @if ($student->gender == 'P')
                                    Perempuan
                                @else
                                    Laki-Laki
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>{{ $student->class->name }}</td>
                        </tr>
                        <tr>
                            <th>Wali Kelas</th>
                            <td>{{ $student->class->homeroomTeacher->name }}</td>
                        </tr>
                        <tr>
                            <th>Ekstrakurikuler</th>
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
            </div>
        </div>
    </div>
@endsection
