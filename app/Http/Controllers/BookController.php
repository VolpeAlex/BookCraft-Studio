<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Authors;
use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PharIo\Manifest\Author;

class BookController extends Controller
{
    public function index()
    {
        $books =Books::all();
        $books->load("author",'category');
        return view('partial.book-block',compact('books'));
    }

    public function detail($id){
        $book = Books::find($id);
        $book->load("author",'category');
        return view('partial.book-detail',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors=Authors::orderby('name','asc')->get();
        $categories=Categories::orderby('name','asc')->get();
        return view('book.add-books',compact('authors'),compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request):RedirectResponse
    {
        Books::create($request->validated());

        return redirect()->route('home')->with('success','Libro creato con successo.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book): View
    {
        $authors = Authors::orderBy('name', 'asc')->get();
        $categories = Categories::orderBy('name', 'asc')->get();

        return view('book.edit-books', compact('book', 'authors', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Books $book): RedirectResponse
    {
        $book->update($request->validated());
        return redirect()->route('home')->with('success','Libro modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('home')->with('success','Libro eliminato con successo.');
    }

}
