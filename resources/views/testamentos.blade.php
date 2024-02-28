@extends('layouts.layout')

@section('title', 'testamentos')

@section('content')
    <h1>Testamentos</h1>
    @foreach ($testamentos as $testamento)
        <div class="card">
            <div class="card-header">
                {{ $testamento->id }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <a href="/livros/{{ $testamento->id }}">
                        <p>{{ $testamento->nome }}</p>
                    </a>
                </blockquote>
            </div>
        </div>
    @endforeach

@endsection
