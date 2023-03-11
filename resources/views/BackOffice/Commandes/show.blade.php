@extends('Layouts.back')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>{{ $article->title }}</h4>

            </div>
            <div class="card-body">
               <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div>
                            <img height="200" src="{{ $article->photo }}" alt="">
                        </div>
                        <h5 class="text-normal">
                            TITRE : <span class="text-bold">{{ $article->title }}</span>
                        </h5>
                        <h5 class="text-normal">
                            SOUS-TITRE : <span class="text-bold">{{ $article->subtitle }}</span>
                        </h5>
                        <div>
                            <span class="badge badge-{{ $article->active?'success':'danger' }}">{{ $article->active?'En ligne':'Hors ligne' }}</span>
                        </div>
                        <div style="float: right" class="float-right">
                            <a style="border-radius: 15px;" class="btn btn-sm btn-success" href="/admin/articles/edit/{{ $article->id }}" >Modifier</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div style="max-height: 300px; overflow: scroll">
                            <p>{{ $article->body }}</p>
                        </div>
                    </div>
                </div>
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
