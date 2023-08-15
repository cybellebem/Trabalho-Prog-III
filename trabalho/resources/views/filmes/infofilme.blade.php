@extends('includes.base')

@section('title', 'Filmes - ver')

@section('content')
    <h2>{{$prod->name}}</h2>
    <p>preço:  {{ number_format ($prod->price, 2, ',', '.') }} </p>
    <p>Quantidade: {{ $prod->quantity}}</p>
    <p>
        <a href="{{route('filmes')}}">Voltar</a>
    </p>
@endsection
