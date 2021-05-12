@extends('base')

@section('content')
    
<div class="jumbotron text-center">
    <h1 class="display-4">Bienvenue sur le blog officiel de la M2L</h1>
    <p class="lead">Restez au courant des dernières infos sportives grâce à nos rédacteurs toujours à l'affût</p>
    <hr class="my-4">
    <div class="bg-image mb-5">
        <img src="{{asset('img/bg-sport.jpg')}}" alt="sports" class="img-fluid rounded mx-auto d-block">
    </div >
    <div>
        <p>Venez jeter un coup d'oeil...</p>
        <a class="btn btn-primary btn-lg" href="{{ route('articles') }}" role="button">Voir les articles <i class="fas fa-arrow-right"></i></a>
    </div>
    
</div>



@endsection