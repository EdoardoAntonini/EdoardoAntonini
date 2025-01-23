@extends('layouts.app')

@section('content')
    <div class="book-details">
        <h3>{{ $book->title }}</h3>
        <p><strong>Autore:</strong> {{ $book->author->name }}</p>
        <p><strong>Categoria:</strong> {{ $book->category->name }}</p>
        <p><strong>Descrizione:</strong> {{ $book->description ?? 'Nessuna descrizione disponibile.' }}</p>
        <p><strong>Numero di pagine:</strong> {{ $book->pages ?? 'N/A' }}</p>
        <a href="{{ route('books.edit', $book->id) }}">Modifica</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo libro?')">Elimina</button>
        </form>
    </div>
@endsection
