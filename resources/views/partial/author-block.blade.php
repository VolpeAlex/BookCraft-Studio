@extends('Layout.list_author')
@section('page-title')
    I miei autori
@endsection
@section('header-title')
    I miei autori
@endsection
@section('header-content')
    Lista degli autori:
@endsection
@section("author-content")
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col" class="w-auto">#</th>
            <th scope="col" class="w-50">Autore</th>
            <th scope="col" class="w-25">Data di nascita</th>
            <th scope="col" class="w-auto text-end">Azioni</th>
        </tr>
        </thead>
    @forelse($authors as $author)
        <tr>
            <td class="align-middle">{{$author->id}}</td>
            <td class="align-middle">{{$author->name}}</td>
            <td class="align-middle">{{$author->birthday}}</td>
            <td class="text-end">
                <form action="{{route("author.delete",$author->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('author.edit',($author))}}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                        <button type="submit" onclick="confirm('Sei Sicuro? Stai eliminando un Autore')" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
                    </div>
                </form>
            </td>
        </tr>
    @empty
        <div>
            Non sono presenti autori
        </div>
    @endforelse
    </table>
@endsection
