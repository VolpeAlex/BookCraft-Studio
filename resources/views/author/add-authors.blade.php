@extends('Layout.list_author')

@section('page-title')
    Nuovo Autore
@endsection
@section('header-title')
    Nuovo Autore
@endsection
@section('header-content')
    Stai aggiungendo un nuovo Autore alla tua lista
@endsection
@section('author-content')
    <form action="{{route('author.store')}}" class="col-sm-12" method="post">
        @csrf
        <div class="mt-4">
            <label for="name" class="d-block">Inserisci il nome.
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="text" name="name" id="name" class="w-100">
        </div>
        <div class="mt-4">
            <label for="birthday" class="d-block">Data di nascita.
                @error('birthday')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <input type="date" name="birthday" id="birthday" class="w-100" >
        </div>

        <button type="submit" class="btn btn-primary me-4">Memorizza l'autore</button>
        <a href="{{route('author.home')}}">Annulla</a>

    </form>
@endsection

