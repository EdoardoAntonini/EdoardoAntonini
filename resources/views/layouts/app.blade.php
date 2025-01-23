<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Libri</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('books.index') }}" class="button-link">Libri</a></li>
            <li><a href="{{ route('authors.index') }}" class="button-link">Autori</a></li>
            <li><a href="{{ route('categories.index') }}" class="button-link">Categorie</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
