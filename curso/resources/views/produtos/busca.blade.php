@extends('layout.template')
@section('title', 'Produto')
@section('conteudo')

<div class="jumbotron">
    <h1 class="display-4">{{ $produto->nome }}</h1>
    <p class="lead">Valor {{ $produto->valor }}</p>
    <hr class="my-4">
    <p>{{$produto->descricao}}</p>
    <a class="btn btn-primary btn-lg" href="/produtos" role="button">Voltar</a>
</div>
@endsection