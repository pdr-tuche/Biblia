@extends('layouts.layout')

@section('title', 'testamentos')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>Livros</h1>
    @foreach ($livros as $livro)
        <div class="card">
            <div class="card-header">
                {{ $livro->abreviacao }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <a href="/versiculos/{{ $livro->id }}">
                        <p>{{ $livro->nome }}</p>
                    </a>
                </blockquote>
            </div>
        </div>
    @endforeach

@endsection
