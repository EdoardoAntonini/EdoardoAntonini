@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/indexAuthor.css') }}">

    <p><a href="{{ route('authors.create') }}" class="button-link">Aggiungi un nuovo autore</a></p>
    <h1>Elenco degli Autori</h1>

    <!-- Contenitore Flexbox per gli autori -->
    <div class="author-list-container">
        @foreach($authors as $author)
            <div class="author-item">
                <p>{{ $author->name }}</p>
                <p class="birthday">(Data di nascita: {{ $author->birthday ?? 'Non specificata' }})</p>
                <a href="{{ route('authors.edit', $author->id) }}" class="button-link">Modifica</a>
            </div>
        @endforeach
    </div>
@endsection
