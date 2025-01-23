@extends('layouts.app')

@section('content')
    <div class="author-details">
        <h3>{{ $author->name }}</h3>
        <p><strong>Data di Nascita:</strong> {{ $author->birthday ?? 'Non disponibile' }}</p>

        <h4>Libri Scritti:</h4>
        <ul>
            @foreach ($author->books as $book)
                <li>
                    <strong>{{ $book->title }}</strong> - {{ $book->category->name }}
                </li>
            @endforeach
        </ul>

        <a href="{{ route('authors.edit', $author->id) }}">Modifica</a>
        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo autore?')">Elimina</button>
        </form>
    </div>
@endsection
