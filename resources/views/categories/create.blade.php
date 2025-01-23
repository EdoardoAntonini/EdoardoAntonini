@extends('layouts.app')

@section('content')
    <h1>Aggiungi una nuova categoria</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome categoria:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Aggiungi Categoria</button>
    </form>
@endsection
