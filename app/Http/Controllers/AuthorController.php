<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Authors;
use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function index()
    {
        $authors =Authors::all();
        return view('partial.author-block',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.add-authors');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request):RedirectResponse
    {
        Authors::create($request->validated());
        return redirect()->route('author.home')->with('success','Autore creato con successo.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authors $author): View
    {
        return view('author.edit-authors', compact('author'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Authors $author): RedirectResponse
    {
        $author->update($request->validated());
        return redirect()->route('author.home')->with('success','Autore modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authors $author): RedirectResponse
    {
        $author->delete();
        return redirect()->route('author.home')->with('success','Autore eliminato con successo.');
    }
}
