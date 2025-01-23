@extends('layouts.app')

@section('content')
    <h2>Modifica Libro</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST" id="bookForm">
        @csrf
        @method('PUT')

        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>

        <label for="author_id">Autore</label>
        <select id="author_id" name="author_id" required>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
            @endforeach
        </select>

        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="description">Descrizione (facoltativa)</label>
        <textarea id="description" name="description">{{ old('description', $book->description) }}</textarea>

        <label for="pages">Numero di pagine (facoltativo)</label>
        <input type="number" id="pages" name="pages" value="{{ old('pages', $book->pages) }}">

        <!-- Bottone Salva modifiche nascosto inizialmente -->
        <button type="submit" id="saveButton" style="display:none;">Salva modifiche</button>
    </form>

    <!-- Form per eliminare il libro -->
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo libro?');">
        @csrf
        @method('DELETE')

        <button type="submit" class="button-link" style="background-color: red; border-color: red;">Elimina Libro</button>
    </form>

    <script>
        // Funzione per verificare la validità del form
        function checkForm() {
            const form = document.getElementById('bookForm');
            const saveButton = document.getElementById('saveButton');
            const titleField = document.getElementById('title');
            const authorField = document.getElementById('author_id');
            const categoryField = document.getElementById('category_id');
            const pagesField = document.getElementById('pages');

            // Verifica che tutti i campi obbligatori siano compilati
            const isFormValid = form.checkValidity() && (pagesField.value === "" || pagesField.value >= 0); // Le pagine non devono essere sotto 0

            // Mostra o nascondi il bottone di salvataggio
            if (isFormValid) {
                saveButton.style.display = 'inline-block'; // Mostra il bottone
            } else {
                saveButton.style.display = 'none'; // Nascondi il bottone
            }
        }

        // Aggiungi un listener agli input per monitorare i cambiamenti
        document.querySelectorAll('#bookForm input, #bookForm select').forEach(element => {
            element.addEventListener('input', checkForm);
        });

        // Verifica la validità del form quando la pagina è caricata
        window.onload = checkForm;
    </script>
@endsection
