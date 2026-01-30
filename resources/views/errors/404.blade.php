@extends('Master_page')

@section('title', '404')

@section('content')
<div class="error">
    <h1>404</h1>
    <p>Page non trouvée</p>
    <a href="{{ url('/') }}">Retour à l'accueil</a>
</div>
@endsection
