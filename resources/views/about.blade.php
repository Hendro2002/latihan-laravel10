@extends('layout.mainlayout')
@section('title', 'About')
@section('content')
    <h1>Ini Halaman About</h1>
    <h2>Selamat datang {{ $name }}, anda adalah {{ $role }}</h2>
@endsection
