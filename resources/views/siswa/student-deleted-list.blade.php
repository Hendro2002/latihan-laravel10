@extends('layout.mainlayout')
@section('title', 'List Murid Terhapus')
@section('content')
    <div class="container my-3">
        <center>
            <h1>Data Siswa Terhapus</h1>
        </center>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="/siswa/students" class="btn btn-primary">Kembali</a>
        </div>
        <hr>

        @if (Session::has('status-restore'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-restore') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Nis</th>
                        <th>Kelas</th>
                        <th>Extrakurikuler</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($student->count() > 0)
                        @foreach ($student as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->class['name'] }}</td>
                                <td>
                                    @foreach ($data->extracurriculars as $item)
                                        - {{ $item->name }} <br>
                                    @endforeach
                                </td>
                                <td>{{ $data->class->homeroomTeacher->name }}</td>
                                <td>
                                    <a href="/siswa/student/{{ $data->id }}/restore" class="btn btn-success">Restore</a>
                                    <a href="student-delete-permanent/{{ $data->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">
                                <center>
                                    <h3>Data Kosong</h3>
                                </center>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
