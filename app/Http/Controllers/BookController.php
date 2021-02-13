<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'year' => $request->year,
        ]);
        return redirect('/books');
    }

    public function show($id) {
        $book = Book::find($id);
        return view('show', compact('book'));
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'year' => $request->year,
        ]);
        return redirect('/books');
    }

    public function delete($id) {
        $book = Book::find($id);
        $book->delete();
        return back();
    }
}
