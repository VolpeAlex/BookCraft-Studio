@extends('Layout.main')

@section('page-title')
    Nuovo Libro
@endsection
@section('header-title')
    Nuovo Libro
@endsection
@section('header-content')
    Stai aggiungendo un nuovo libro alla tua lista
@endsection
@section('main-content')
    <form action="{{route('book.store')}}" class="col-sm-12" method="post">
        @csrf
        @error('author_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        @if($authors->isNotEmpty())
            <div>
                <label for="author_id">Seleziona un autore:</label>
                <select name="author_id" id="author_id">
                    <option value="">-- Seleziona un autore --</option>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                            {{$author->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        @else
            <p>Nessun autore disponibile.</p>
        @endif
        @if($categories->isNotEmpty())
            <div>
                <label for="category_id">Seleziona una categoria:</label>
                <select name="category_id" id="category_id">
                    <option value="">-- Seleziona una categoria --</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        @else
            <p>Nessuna categoria disponibile.</p>
        @endif
        <div class="mt-4">
            <label for="title" class="d-block">Inserisci un titolo.
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="title" id="title" class="w-100">
        </div>
        <div class="mt-4">
            <label for="description" class="d-block">Description.
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="description" id="description" class="w-100" maxlength="800">
        </div>
        <div class="mt-4">
            <label for="pages" class="d-block">Numero di pagine.
                @error('pages')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="number" name="pages" id="pages" class="w-100" >
        </div>
        <button type="submit" class="btn btn-primary me-4">Memorizza il libro</button>
        <a href="{{route('home')}}">Annulla</a>

    </form>
@endsection

