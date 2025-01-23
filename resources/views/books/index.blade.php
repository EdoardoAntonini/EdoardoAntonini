@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/indexBook.css') }}">
    <a href="{{ route('books.create') }}" class="button-link">Aggiungi un nuovo libro</a>
    <h2>Elenco dei Libri</h2>


    <!-- Mostra un messaggio di successo se presente -->
    @if (session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif

    <div class="book-list-container">
        @foreach ($books as $book)
            <div class="book-item">
                <h3>{{ $book->title }}</h3>
                <p><strong>Autore:</strong> {{ $book->author->name }}</p>
                <p><strong>Categoria:</strong> {{ $book->category->name }}</p>
                <p><strong>Pagine:</strong> {{ $book->pages }}</p>
                <p><strong>Descrizione:</strong> {{ $book->description }}</p>
                <a href="{{ route('books.edit', $book->id) }}" class="button-link">Modifica</a>
            </div>
        @endforeach
    </div>

@endsection
