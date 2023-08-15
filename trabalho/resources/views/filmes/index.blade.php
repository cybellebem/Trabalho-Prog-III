@extends('includes.base')

@section('title', 'Filmes')

@section('content')

@if (session('sucesso'))
    <div style="background-color:greenyellow;color:rebeccapurple;">
        <marquee>
        🎆 {{ session('sucesso') }}
        </marquee>
    </div>
@endif

<table border="1" style="border-color:rgb(52, 214, 87)">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>

    @foreach ($prods as $prod)
    <tr>
        <td><a href="{{ route('filmes.infofilme', $filme->id) }}">{{ $filme->name }}</a></td>
        <td>R$ {{ number_format($filme->price, 2, ',', '.') }}</td>
        <td>{{ $filme->quantity }}</td>
        <td><a href="{{ route('filmes.edit', $prod->id) }}">Editar</a></td>
        <td><a href="{{ route('filmes.apagarfilme', $filme->id) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

<a href="{{ route('filmes.addfilme') }}">Adicionar produto</a>
@endsection
