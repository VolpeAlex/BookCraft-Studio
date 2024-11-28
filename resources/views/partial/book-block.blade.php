@extends('Layout.main')
@section('page-title')
    I miei libri
@endsection
@section('header-title')
    I miei libri
@endsection
@section('header-content')
    Lista dei libri:
@endsection
@section("main-content")
    @forelse($books as $book)
        <div class="col-md-4 my-3">
            <div class="list-book">
        <article class="card border-0">
            <div class="card-body">
                <h3 class="card-title">{{$book->title}}</h3>
                <div>di {{$book->author->name}}</div>
                <div class="mt-2"><span class="badge text-bg-secondary">{{$book->category_name}}</span></div>
                <form action="{{route("book.delete",$book->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="btn-group mt-3 d-flex justify-content-center" role="group">
                        <a href="{{route('book.detail',($book->id))}}" class="btn btn-light"><i class="bi bi-eye"></i></a>
                        <a href="{{route('book.edit',($book->id))}}" class="btn btn-light"><i class="bi bi-pencil"></i></a>

                        <button type="submit" onclick="confirm('Sei Sicuro? Stai eliminando un Autore')"
                                class="btn btn-light"><i class="bi bi-trash3"></i></button>
                    </div>
                </form>
            </div>
        </article>
            </div>
        </div>
    @empty
        <div>
            Non sono presenti libri
        </div>
    @endforelse
@endsection
