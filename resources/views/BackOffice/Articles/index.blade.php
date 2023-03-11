@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>GESTION DES ARTICLES</h4>
                <div style="float: right" class="float-right">
                    <a style="border-radius: 15px;" class="btn btn-sm btn-danger" href="/admin/article/create" >Ajouter</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped hover table-sm">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>TITRE</th>
                                <th>CATEGORIE</th>
                                <th>STATUT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->created_at? date_format($article->created_at,'d/m/Y H:i'):'-' }}</td>
                                    <td><a href="/admin/articles/{{ $article->id }}">{{ $article->title }}</a></td>
                                    <td>{{ $article->cat?$article->cat->name: '-' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $article->active?'success':'danger' }}">{{ $article->active?'En ligne':'Hors ligne' }}</span>
                                    </td>
                                    <td>
                                        @if ($article->active)
                                        <a class="btn btn-xs btn-danger" title="Mettre hors ligne" href="/admin/article/disable/{{ $article->id }}">DEPUBLIER</a>
                                        @else
                                        <a class="btn btn-xs btn-info" title="Mettre en ligne" href="/admin/article/enable/{{ $article->id }}">PUBLIER</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
