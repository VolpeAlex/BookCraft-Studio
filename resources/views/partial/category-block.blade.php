@extends('Layout.list_category')
@section('page-title')
    Le mie categorie
@endsection
@section('header-title')
    Le mie categorie
@endsection
@section('header-content')
    Lista delle categorie:
@endsection
@section("category-content")
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col" class="w-auto">#</th>
            <th scope="col" class="w-75">Categoria</th>
            <th scope="col" class="w-auto text-end">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td class="align-middle">{{$category->id}}</td>
                <td class="align-middle">{{$category->name}}</td>
                <td class="text-end">
                    <form action="{{route("category.delete",$category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('category.edit',($category))}}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                            <button type="submit" onclick="confirm('Sei Sicuro? Stai eliminando una Categoria')" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
            <div>
                Non sono presenti categorie
            </div>
        @endforelse
    </table>
@endsection

