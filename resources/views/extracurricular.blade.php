@extends('layout.mainlayout')
@section('title', 'Extracurricular')
@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <h2>Selamat datang</h2>
    <div class="mb-5">
        <a href="extracurricular-add"class="btn btn-primary">Add Data</a>
    </div>
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
    <h3>Extracurricular List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Extracurricular</th>
                {{-- <th>Anggota</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    {{-- <td>
                        @foreach ($data->students as $item)
                            - {{ $item->name }} <br>
                        @endforeach
                    </td> --}}
                    <td><a href="extracurricular-detail/{{ $data->id }}">Detail</a>
                        <a href="extracurricular-edit/{{ $data->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
