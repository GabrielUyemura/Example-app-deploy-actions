@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


        <h1>Algum titulo</h1>
        <img src="/img/banner.jpg" alt="banner">

        @if (10 > 5)
                <p>a condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == 'Pedro')

        <p>O nome é pedro</p>
        @elseif ($nome == 'Gabriel')
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
        @endif

        @for($i=0; $i < count($arr); $i++)
            <p>{{ $arr[$i]}} - {{$i}}</p>
            @if($i==2)
                <p>o I é 2</p>
            @endif
        @endfor

        @php
        $name = "João";
        echo $name;
        
        @endphp


    <p>Chegou aqui!</p>
    <!-- comentario do html -->

    {{-- comentario do blade--}}
    @foreach($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p>{{$nome}}</p>
    @endforeach

@endsection