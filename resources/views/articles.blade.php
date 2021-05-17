@extends('base')

@section('content')

    <div class="jumbotron">
        <h1 class="display-3 text-center">Articles</h1>
        <div class="articles row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-6">
                    <div class="card my-3">
                        <div class="card-body">
                            <span class="badge bg-warning my-3">{{ $article->category->label }}</span>
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <a href="{{route('article', $article->slug)}}" class="btn btn-primary">Voir l'article <i class="fas fa-arrow-right"></i></a>
                        </div>                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.custom')}}
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('home') }}"><button class="btn btn-primary">Retour à l'accueil</button></a>
        </div>
    </div>
    
@endsection