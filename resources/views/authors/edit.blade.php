<!-- resources/views/authors/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Modifica Autore</h2>

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome Completo</label>
        <input type="text" id="name" name="name" value="{{ old('name', $author->name) }}" required>

        <label for="birthday">Data di Nascita (facoltativo)</label>
        <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $author->birthday) }}">

        <button type="submit">Salva modifiche</button>
    </form>

    <!-- Form per eliminare l'autore -->
    <form action="{{ route('authors.destroy', $author->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo autore?');">
        @csrf
        @method('DELETE')

        <button type="submit" class="button-link" style="background-color: red; border-color: red;">Elimina Autore</button>
    </form>
@endsection
