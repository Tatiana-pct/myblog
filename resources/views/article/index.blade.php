@extends('base')

@section('content')
<div class="container">

    <h1 class="text-center my-5"> Articles </h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-2" href="{{route('articles.create')}}"><i class="fas fa-plus mx-2"></i> Ajouter un nouvel article</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Créé le : </th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr class="table-primary">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->dateFormatted()}}</td>
                <td class="d-flex">
                   <a href="#" class="btn btn-warning mx-2">Editer</a>

                    <form action="{{route('articles.delete', $article->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    </div>
</div>
@endsection
