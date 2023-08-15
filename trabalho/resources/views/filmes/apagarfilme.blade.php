@extends('includes.base')

@section('title', 'Filmes')

@section('content')
<h2>Apagar filme</h2>
<p>Você está prestes a apagar {{ $prod->name }}.</p>
<p>Tem certeza de que quer fazer isso?</p>

<form action="{{ route('filmes.deleteForReal', $prod->id) }}" method="post">
    @csrf
    @method('delete')

    <input type="submit" value="Pó apagá!">
</form>
@endsection
