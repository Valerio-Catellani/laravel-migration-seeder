@extends('layouts.app')

@section('title', 'Trains')

@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/img/station.jpg') }}')" class="mt-5">
        <div class="main-container container">
            <h2 class="hype-text-shadow">Tutti i Treni</h2>
            @include('partials.table', ['trains' => $trains])
            <h2 class="hype-text-shadow">Tutti i Treni in partenza Oggi</h2>
            @include('partials.table', ['trains' => $trainsToday])

        </div>
    </main>

@endsection
