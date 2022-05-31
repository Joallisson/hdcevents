
@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Alguma coisa</h1>

    <img src="/img/banner.jpg" alt="template">

    @if($nome === 'pedro')
        <p>O nome é pedro</p>
    @elseif($nome === 'Mateus')
        <p>O nome é mateus</p>
    @else
        <p>O nome não é nenhum</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
    @endfor

    @php
        $name = 'joallisson';
        echo $name;
    @endphp

    @foreach($nomes as $name)
        <p>{{$loop->index}}</p>
        <p>{{$name}}</p>
    @endforeach
@endsection