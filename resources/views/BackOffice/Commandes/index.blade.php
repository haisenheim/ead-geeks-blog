@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>GESTION DES COMMANDES</h4>
                <div style="float: right" class="float-right">
                    <a style="border-radius: 15px;" class="btn btn-sm btn-success" href="/admin/commande/create" >Ajouter</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped hover table-sm">
                        <thead>
                            <tr>
                                <th>DATE</th>
                                <th>&numero;</th>
                                <th>STATUT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $commande)
                                <tr>
                                    <td>{{ $commande->created_at? date_format($commande->created_at,'d/m/Y H:i'):'-' }}</td>
                                    <td><a href="/admin/commandes/{{ $commande->id }}">{{ $commande->name }}</a></td>

                                    <td>

                                    </td>
                                    <td>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $commandes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
