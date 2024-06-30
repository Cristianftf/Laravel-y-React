<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book' , compact('books'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'author' => 'required|min:4',
            'description' => 'required|max:255'
        ]);

        Book::create($validated);

        return to_route('book.index');
    }

    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'name' => 'required|min:4',
            'author' => 'required|min:4',
            'description' => 'required|max:255'
        ]);

        $book->update($validated);

        return to_route('book.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return to_route('book.index');
    }
}
