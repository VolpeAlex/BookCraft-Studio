@extends('Layout.list_category')
@section('page-title')
    Modifica categoria
@endsection
@section('header-title')
    Modifica categoria
@endsection
@section('header-content')
    Modifica una categoria
@endsection
@section("category-content")
    <form action="{{route('category.update', $category->id)}}" class="col-sm-12" method="post">
        @csrf
        @method('PUT')
        <div class="mt-4">
            <label for="name" class="d-block">Inserisci la categoria.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100" value="{{old('name',$category->name)}}">
        </div>
        <button type="submit" class="btn btn-primary me-4">Memorizza la categoria</button>
        <a href="{{route('category.home')}}">Annulla</a>

    </form>
@endsection

