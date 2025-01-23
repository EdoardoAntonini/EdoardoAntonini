@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/indexCategory.css') }}">
    <p><a href="{{ route('categories.create') }}" class="button-link">Aggiungi una nuova categoria</a></p>
    <h1>Elenco delle Categorie</h1>

    <!-- Contenitore Flexbox per le categorie -->
    <div class="category-list-container">
        @foreach($categories as $category)
            <div class="category-item">
                <p>{{ $category->name }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="button-link">Modifica</a>
            </div>
        @endforeach
    </div>
@endsection
