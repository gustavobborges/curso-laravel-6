@extends('admin.layouts.app')

@section('title', 'Deletar Produto')

@section('content')
<h1>Deletar Produto {{ $id }}</h1>

<form action="{{ route('products.delete', $id) }}" method="post">
        @method('DELETE')
        @csrf
        <input type="texte" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection