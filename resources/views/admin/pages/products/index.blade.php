@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo os Produtos</h1>

    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if ($loop->last) last @endif"> {{ $product }} </p>
        @endforeach
    @endif

    <hr>
    @forelse ($products as $product)
        <p class="@if ($loop->first) last @endif"> {{ $product }} </p>  
    @empty
        <p>Não existem produtos cadastrados</p>
    @endforelse
    <hr>


    @if ($teste === '123')
        É igual
    @elseif($teste === 123)
        É igual 13
    @else
        É diferente
    @endif

    @unless ($teste === '123')
    123123
    @else
    456456456
    @endunless

    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset
    
    @empty($teste3)
        <p>Vazio...</p>
    @else
    <p>tem coisa..</p>
    @endempty

    @auth
        <p>Autenticado</p> 
    @else 
        <p>Não autenticado</p>       
    @endauth

    @guest
       <p>Não autenticado</p> 
    @endguest

    @switch($teste)
        @case(1)
            Igual a 1
            @break
        @case(2)
            Igual a 2
            @break
        @default
            Default
    @endswitch


    <style>
        .last {background: #CCC;}

    </style>

@endsection('content')

