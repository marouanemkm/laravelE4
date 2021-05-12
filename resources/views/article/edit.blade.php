@extends('base')

@section('content')

    <div class="container">
        <h1 class="text-center mt-5">Modifier un article</h1>
        <form action="{{ route('article.update', $article->id) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" value="{{ $article->title }}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ $article->subtitle }}" class="form-control @error('subtitle') is-invalid @enderror">
                    <small class="form-text text-muted">Décrivez le thème de votre article</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea id="tinyeditor" name="content" class="w-100 @error('content') is-invalid @enderror">{{ $article->content }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <script>
                    tinymce.init({
                        selector: '#tinyeditor',
                    });
                </script>
            </div>

            <div class="d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-danger">Mettre à jour l'article</button>
            </div>

        </form>

        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('article.index') }}"><button class="btn btn-primary">Retour</button></a>
        </div>

    </div>

@endsection