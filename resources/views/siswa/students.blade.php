@extends('layout.mainlayout')
@section('title', 'Data Siswa')
@section('content')
    <div class="container my-3">
        <center>
            <h1>Data Siswa</h1>
        </center>
        @if (Session::has('status-add'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-add') }}
            </div>
        @endif

        @if (Session::has('status-update'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-update') }}
            </div>
        @endif

        @if (Session::has('status-delete'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message-delete') }}
            </div>
        @endif
        <hr>
        <a href="student-add" class="btn btn-primary">Tambah Data</a>
        <hr>
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
                    @if ($studentList->count() > 0)
                        @foreach ($studentList as $data)
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
                                    <a href="student-detail/{{ $data->id }}" class="btn btn-secondary">Detail</a>
                                    <a href="student-edit/{{ $data->id }}" class="btn btn-warning">Edit</a>
                                    <a href="student-delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
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
