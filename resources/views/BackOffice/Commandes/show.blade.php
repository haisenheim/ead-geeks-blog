@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $commande->name }}</h4>

            </div>
            <div class="card-body">
               <div class="container">
                    <table class="table table-sm table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>DESIGNATION</th>
                                <th>PU</th>
                                <th>QUANTITE</th>
                                <th>MONTANT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commande->lignes as $item)
                                <tr>
                                    <td>{{ $item->produit->name }}</td>
                                    <td>{{ $item->pu }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->montant }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
    </div>
    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
