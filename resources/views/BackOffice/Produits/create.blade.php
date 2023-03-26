@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>NOUVEAU PRODUIT</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="/admin/produits" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required placeholder="Designation" name="name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" required placeholder="Prix de vente" name="prix">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" required class="form-control" placeholder="Saisir une description pour ce produit" cols="2" rows="3"></textarea>
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


