@extends('base')

@section('content')

    <div class="d-flex justify-content-center my-5 text-center" style="font-size:40px;">
        <div class="card text-white bg-primary mb-3 " style="max-width: 60rem;">
            <div class="card-header my-3">Oups !</div>
            <div class="card-body">
                <h4 class="card-title">Une erreur 404 ?</h4>
                <p class="card-text pt-5" style="font-size:25px;">Cul-de-sac ! Il n'y a rien par ici, vous êtes surement perdu.</p>
                <a href="{{ route('home') }}" class="btn btn-danger mt-5">Retournez à l'accueil</a>
            </div>
        </div>
    </div>
    
@endsection