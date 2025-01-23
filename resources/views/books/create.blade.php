@extends('layouts.app')

@section('content')
    <h2>Aggiungi un Nuovo Libro</h2>
    <form action="{{ route('books.store') }}" method="POST" id="bookForm">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="author_id">Autore</label>
        <select id="author_id" name="author_id" required>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
            @endforeach
        </select>

        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="description">Descrizione (facoltativa)</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>

        <label for="pages">Numero di pagine (facoltativo, non deve essere sotto 1)</label>
        <input type="number" id="pages" name="pages" value="{{ old('pages') }}" min="1">

        <!-- Bottone di salvataggio nascosto inizialmente -->
        <button type="submit" id="saveButton" style="display:none;">Salva</button>
    </form>

    <script>
        // Funzione per verificare la validità del form
        function checkForm() {
            const form = document.getElementById('bookForm');
            const saveButton = document.getElementById('saveButton');
            const pagesField = document.getElementById('pages');

            // Verifica che tutti i campi obbligatori siano compilati
            const isFormValid = form.checkValidity();

            // Verifica che le pagine non siano inferiori a 0
            const isPagesValid = pagesField.value >= 0 || pagesField.value === '';  // Consente il campo vuoto

            // Mostra o nascondi il bottone di salvataggio
            if (isFormValid && isPagesValid) {
                saveButton.style.display = 'inline-block'; // Mostra il bottone
            } else {
                saveButton.style.display = 'none'; // Nascondi il bottone
            }
        }

        // Aggiungi un listener agli input per monitorare i cambiamenti
        document.querySelectorAll('#bookForm input, #bookForm select, #bookForm textarea').forEach(element => {
            element.addEventListener('input', checkForm);
        });

        // Verifica la validità del form quando la pagina è caricata
        window.onload = checkForm;
    </script>
@endsection
