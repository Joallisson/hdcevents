
@extends('layouts.main')

@section('title', 'Products')

@section('content')

    <h1>Tela de Produtos</h1>

    @if($busca)
        <p>O usuário está buscando {{ $busca }}</p>
    @endif

@endsection
