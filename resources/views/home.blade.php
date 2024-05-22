@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/img/station.jpg') }}')">
        <h1>Home page</h1>
    </main>

@endsection
