@extends('Layouts.back')

@section('content')
    <div class="container">
        <p>BONJOUR {{ auth()->user()->name }}</p>
    </div>
@endsection
