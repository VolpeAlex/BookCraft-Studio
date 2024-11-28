@extends('Layout.list_category')
@section('page-title')
    Nuova categoria
@endsection
@section('header-title')
    Nuova categoria
@endsection
@section('header-content')
    Aggiungi una categoria
@endsection
@section("category-content")
    <form action="{{route('category.store')}}" class="col-sm-12" method="post">
        @csrf
        <div class="mt-4">
            <label for="name" class="d-block">Inserisci la categoria.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100">
        </div>
        <button type="submit" class="btn btn-primary me-4">Memorizza la categoria</button>
        <a href="{{route('category.home')}}">Annulla</a>

    </form>
@endsection

