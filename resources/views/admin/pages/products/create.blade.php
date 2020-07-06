@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar novo Produto</h1>

    @include('admin.includes.alerts')

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="texte" class="form-control" name="name" placeholder="Nome:" value="{{ old('name') }}">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        </div>
        <div class="form-group">
        <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success" >Enviar</button>
        </div>
    </form>
@endsection