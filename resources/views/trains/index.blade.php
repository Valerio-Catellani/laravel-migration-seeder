@extends('layouts.app')

@section('title', 'Trains')

@section('content')
    <main style="background-image: url('{{ Vite::asset('resources/img/station.jpg') }}')" class="mt-5">
        <div class="main-container container">
            <div class="table-title-container overflow-hidden">
                <h2 class="hype-text-shadow position-relative ">Tutti i Treni</h2>
            </div>
            @include('partials.table', ['trains' => $trains])
            <div class="overflow-hidden table-title-container">
                <h2 class="hype-text-shadow position-relative">Tutti i Treni in partenza Oggi</h2>
            </div>
            @include('partials.table', ['trains' => $trainsToday])

        </div>
    </main>

@endsection
