@extends('Layout.list_author')

@section('page-title')
    Modifica Author
@endsection

@section('header-title')
    Modifica Author
@endsection

@section('header-content')
    Stai modificando un Author
@endsection

@section('author-content')
    <form action="{{ route('author.update', $author->id) }}" class="col-sm-12" method="post">
        @csrf
        @method('PUT')
        <div class="mt-4">
            <label for="name" class="d-block">Inserisci il nome.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100" value="{{ old('name', $author->name) }}">
        </div>
        <div class="mt-4">
            <label for="birthday" class="d-block">Data di nascita.
                @error('birthday')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="date" name="birthday" id="birthday" class="w-100" value="{{ old('birthday', $author->birthday) }}">
        </div>

        <button type="submit" class="btn btn-primary me-4">Memorizza il libro</button>
        <a href="{{ route('author.home') }}">Annulla</a>
    </form>
@endsection
