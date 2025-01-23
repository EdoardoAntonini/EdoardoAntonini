@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo autore</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="birthday">Data di nascita:</label>
            <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}">
            @error('birthday')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Aggiungi Autore</button>
    </form>
@endsection
