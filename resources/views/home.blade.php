@extends('layout.mainlayout')
@section('title', 'Home')
@section('content')
    <h1>Ini Halaman Home</h1>
    <h2>Selamat datang {{ $name }}, anda adalah {{ $role }}</h2>

    {{-- @if ($role == 'admin')
            <a href="#"><button class="btn btn-primary">Halaman Admin</button></a>
        @elseif ($role == 'staff')
            <a href="#"><button class="btn btn-success">Halaman Staff</button></a>
        @else
            <a href="#"><button class="btn btn-danger">Halaman User</button></a>
        @endif --}}

    {{-- @switch($role)
            @case($role == 'admin')
                <a href="#"><button class="btn btn-primary">Halaman Admin</button></a>
            @break

            @case($role == 'staff')
                <a href="#"><button class="btn btn-success">Halaman Staff</button></a>
            @break

            @default
                <a href="#"><button class="btn btn-danger">Halaman User</button></a>
        @endswitch --}}

    {{-- @for ($i = 0; $i < 5; $i++)
            <p>ini adalah perulangan ke-{{ $i }}</p>
        @endfor --}}

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach
    </table>

@endsection
