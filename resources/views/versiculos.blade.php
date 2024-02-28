@extends('layouts.layout')

@section('title', 'Versículos')

@section('content')
    <h1>Versículos</h1>
    @foreach ($versiculos as $versiculo)
        <div class="card">
            <div class="card-header">
                <p>capitulo {{ $versiculo->capitulo }} - versiculo {{ $versiculo->versiculo }}</p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $versiculo->texto }}</p>
                </blockquote>
            </div>
        </div>
    @endforeach

@endsection
