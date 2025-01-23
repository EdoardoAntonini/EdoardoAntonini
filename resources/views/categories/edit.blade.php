<!-- resources/views/categories/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Modifica Categoria</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome Categoria</label>
        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>

        <button type="submit">Salva modifiche</button>
    </form>

    <!-- Form per eliminare la categoria -->
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questa categoria?');">
        @csrf
        @method('DELETE')

        <button type="submit" class="button-link" style="background-color: red; border-color: red;">Elimina Categoria</button>
    </form>
@endsection
