@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $article->title }}</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/articles/save" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $article->id }}">
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $article->title }}" placeholder="Le titre" name="title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required value="{{ $article->subtitle }}" placeholder="Le sous-titre" name="subtitle">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="" required class="form-control" placeholder="Saisir le corps de l'article ici .." cols="2" rows="3">{{ $article->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" {{ $article->active?'checked':'' }}  name="active">
                        <label for="">Cet article va etre en ligne?</label>
                    </div>
                    <div class="form-group">
                        <label for="">Image de l'article</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
