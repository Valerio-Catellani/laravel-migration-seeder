@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/img/station.jpg') }}')">
        <div class="main-container container">
            <h1 class="hype-text-shadow text-center display-1 fw-bold ">Welcome to BoolStation!</h1>
        </div>
    </main>

@endsection
