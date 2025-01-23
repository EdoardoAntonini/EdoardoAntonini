<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Mostra la lista degli autori
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // Mostra il form di creazione dell'autore
    public function create()
    {
        return view('authors.create');
    }

    // Salva il nuovo autore nel database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
        ]);

        Author::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index');
    }

    // Mostra il form di modifica dell'autore
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    // Salva le modifiche di un autore
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
        ]);

        $author->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('authors.index');
    }

    // Elimina un autore
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }
}

