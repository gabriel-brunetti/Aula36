@extends('layouts.master')

@section('titulo')
    Clientes
@endsection

@section('conteudo')
<div class="text-wrapper text-center">
        <h1 class="display-2 py-5">Nossos Clientes</h1>
        <h2 class="display-4">Esses são os nossos melhores clientes</h2>
        <ul class="clientes list-unstyled">
            {{-- chamando variavel com duplo bigode --}}
            <li>
                <h1 class="display-5"> {{ $nome}} </h1>
            </li>

            {{-- sintaxe do ForEach do blade --}}
            @foreach ($clientes as $c)
                <li> <h1 class="display-5"> {{$c}} </h1>  </li>
            @endforeach
        </ul>
    <marquee>Nosso cliente do mês é {{$clienteDoMes}}</marquee>
    </div>
@endsection 