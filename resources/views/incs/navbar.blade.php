<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <img src="{{asset('img/logo.gif')}}" alt="logo M2L" style="width:5%;margin:0 15px;border-radius:100px;">
    <a class="navbar-brand" href="{{ route('home') }}"> M2L News</a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ml-md-5">
                <a class="nav-link" href="{{ route('articles') }}">Articles</a>
            </li>
            <li class="ml-md-5 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">M2L</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('locaux') }}">Locaux</a>
                    <a class="dropdown-item" href="{{ route('materiel') }}">Matériel</a>
                    <div class="dropdown-divider"></div>
                </div>
              </li>
            <li class="nav-item ml-md-5">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Auth::user())
                @if (Auth::user()->role == 'ADMIN')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.index') }}">Espace admin</a>
                    </li>
                @endif
                @if (Auth::user()->role == 'USER')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Bonjour {{ Auth::user()->name }}</a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button type="submit" class="btn" style="color:white;">Déconnexion</button>
                    </form>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Se  connecter</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">S'inscrire</a></li>
            @endif
        </ul>
    </div>

</nav>