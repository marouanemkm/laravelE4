@extends('base')

@section('content')

    <div class="container">
        <table class="table table-hover mt-5">
            <h1 class="text-center my-5">Gestion des articles</h1>

            <div class="d-flex justify-content-center">
                <a class="btn btn-info my-5" href="{{ route('article.create') }}"><i class="fas fa-plus mx-2"> Ajouter un article</i></a>
            </div>

            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Date de publication</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            @foreach ($articles as $article)
                <tbody>
                    <tr class="table-secondary">
                        <th>{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->dateFormated() }}</td>
                        <td class="d-flex">

                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-info mx-3">Éditer</a>

                            <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal" id="modal-open-{{ $article->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Attention</h5>
                                                <button type="button" class="close" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Voulez-vous vraiment supprimer cette article ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Confirmer</button>
                                                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.custom')}}
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('home') }}"><button class="btn btn-primary">Retour à l'accueil</button></a>
        </div>
    </div>
    
@endsection