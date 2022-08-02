@extends('comptelayout')

@section('content')
    <h1>Les Utilisateurs</h1>
    <ul>
        @foreach( $utilisateurs as $utilisateur)
            <li>{{$utilisateur->email}}</li>
        @endforeach
    </ul>
@endsection