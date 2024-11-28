<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =Categories::all();
        return view('partial.category-block',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add-categories');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request):RedirectResponse
    {
        Categories::create($request->validated());
        return redirect()->route('category.home')->with('success','Categoria creato con successo.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category): View
    {
        return view('category.edit-categories', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Categories $category): RedirectResponse
    {
        $category->update($request->validated());
        return redirect()->route('category.home')->with('success','Categoria modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.home')->with('success','Categoria eliminato con successo.');
    }
}
