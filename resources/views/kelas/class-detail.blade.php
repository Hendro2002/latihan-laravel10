@extends('layout.mainlayout')
@section('title', 'Detail Kelas')
@section('content')
    <div class="container my-3">
        <a href="/kelas/class" class="btn btn-primary">Kembali</a>
        <div class="card mt-3">
            <div class="card-header">
                <center>
                    <h1>Detail Kelas {{ $class->name }}</h1>
                </center>
            </div>

            <div class="card-body">
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Nama Kelas</th>
                            <td>{{ $class->name }}</td>
                        </tr>

                        <tr>
                            <th>Wali Kelas</th>
                            <td>{{ $class->homeroomTeacher->name }}</td>
                        </tr>

                        <tr>
                            <th>Siswa</th>
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
            </div>
        </div>
    </div>
@endsection
