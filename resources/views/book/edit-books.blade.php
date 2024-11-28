@extends('Layout.main')

@section('page-title')
    Modifica Libro
@endsection

@section('header-title')
    Modifica Libro
@endsection

@section('header-content')
    Stai modificando un libro
@endsection

@section('main-content')
    <form action="{{ route('book.update', $book->id) }}" class="col-sm-12" method="post">
        @csrf

        @method('PUT')
        @error('author_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        @if($authors)
            <div>
                <label for="author_id">Seleziona un autore:</label>
                <select name="author_id" id="author_id">
                    <option value="">-- Seleziona un autore --</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}"
                            {{ (old('author_id', $book->author_id) == $author->id) ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        @else
            <p>Nessun autore disponibile.</p>
        @endif

        @error('category_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        @if($categories->isNotEmpty())
            <div>
                <label for="category_id">Seleziona una categoria:</label>
                <select name="category_id" id="category_id">
                    <option value="">-- Seleziona una categoria --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ (old('category_id', $book->category_id) == $category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
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
            <input type="text" name="title" id="title" class="w-100" value="{{ old('title', $book->title) }}">
        </div>

        <div class="mt-4">
            <label for="description" class="d-block">Description.
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="description" id="description" class="w-100" maxlength="800" value="{{ old('description', $book->description) }}">
        </div>

        <div class="mt-4">
            <label for="pages" class="d-block">Numero di pagine.
                @error('pages')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="number" name="pages" id="pages" class="w-100" value="{{ old('pages', $book->pages) }}">
        </div>

        <button type="submit" class="btn btn-primary me-4">Memorizza il libro</button>
        <a href="{{ route('home') }}">Annulla</a>
    </form>
@endsection
