@extends('base')

@section('content')
<div class="container">

    <h1 class="text-center my-5"> Articles </h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-2" href="{{route('articles.create')}}"><i class="fas fa-plus mx-2 mb-lg-2"></i> Ajouter un nouvel article</a>
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
                   <a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning mx-2">Editer</a>

                    <button type="button" class="btn btn-danger mx-2" onclick="document.getElementById('modal-open-{{$article->id}}').style.display='block'">Supprimer</button>
                    <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <div class="modal" id="modal-open-{{$article->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">La suppression d'un élément est definitif ! </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('modal-open-{{$article->id}}').style.display='none'">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>etes-vous sur de vouloir supprimer cet élément ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Oui</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$article->id}}').style.display='none'">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
