@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>GESTION DES PRODUITS</h4>
                <div style="float: right" class="float-right">
                    <a style="border-radius: 15px;" class="btn btn-sm btn-danger" href="/admin/produit/create" >Ajouter</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped hover table-sm">
                        <thead>
                            <tr>

                                <th>DESIGNATION</th>
                                <th>PRIX DE VENTE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $article)
                                <tr>

                                    <td><a href="/admin/a/{{ $article->id }}">{{ $article->name }}</a></td>
                                    <td>{{ number_format($article->prix,0,',','.') }}</td>
                                    <td>
                                        <span class="badge badge-{{ $article->active?'success':'danger' }}">{{ $article->active?'ACTIF':'DESACTIVE' }}</span>
                                    </td>
                                    <td>
                                        @if ($article->active)
                                        <a class="btn btn-xs btn-danger" title="Mettre hors ligne" href="/admin/produit/disable/{{ $article->id }}">DESACTIVER</a>
                                        @else
                                        <a class="btn btn-xs btn-info" title="Mettre en ligne" href="/admin/produit/enable/{{ $article->id }}">ACTIVER</a>
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
