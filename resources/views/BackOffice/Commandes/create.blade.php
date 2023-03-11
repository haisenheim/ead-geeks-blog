@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>NOUVELLE COMMANDE</h4>

            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="" id="produit_id" class="form-control">
                                    <option value="">Produit ...</option>
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" id="qte"  placeholder="Quantite" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" id="pu"  placeholder="Prix de vente" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                               <button id="btn-ajout" class="btn btn-danger btn-xs">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <th>DESIGNATIOM</th>
                            <th>PU</th>
                            <th>QUANTITE</th>
                            <th>TOTAL</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min-3.6.1.js') }}"></script>
    <script>
        $('#btn-ajout').click(function(){
            alert('Hello tous!');
        });
    </script>
    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
