@extends('Layouts.back')

@section('content')
    <div class="container">        <div class="">
            <div class="">
                <h4 class="">GESTION DES PRODUITS</h4>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($produits as $produit)
                        <div class="col-md-3 col-sm-12">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <img class="pdt-img" src="{{ asset($produit->image_uri) }}" height="80" alt="">
                                </div>
                                <div style="font-size: 1rem;" class="card-footer">
                                    <p>{{ $produit->name }}</p>
                                    <p><span class="text-bold">{{ number_format($produit->prix,0,',','.') }} XAF</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
