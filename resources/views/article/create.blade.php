@extends('base')

@section('content')
    
    <div class="container">
        <h1 class="text-center mt-5">Poster un nouvel article</h1>
        <form action="{{ route('article.store') }}" method="POST">

            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" placeholder="Titre de l'article" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle" placeholder="Sous-titre de l'article" class="form-control @error('subtitle') is-invalid @enderror">
                    <small class="form-text text-muted">Décrivez le thème de votre article</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="category" class="form-label mt-4">Catégorie de l'article</label>
                    <select name="category" class="form-control" id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea id="tinyeditor" name="content" class="w-100 @error('content') is-invalid @enderror"></textarea>
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
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>

        </form>
    </div>

@endsection