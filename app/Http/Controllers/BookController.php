<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Mostra la lista dei libri
    public function index()
    {
        $books = Book::with(['author', 'category'])->get();
        return view('books.index', compact('books'));
    }

    // Mostra il form per creare un nuovo libro
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'categories'));
    }

    // Salva un nuovo libro nel database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }

    // Mostra i dettagli di un libro
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Mostra il form per modificare un libro
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    // Aggiorna un libro
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index');
    }

    // Elimina un libro
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
