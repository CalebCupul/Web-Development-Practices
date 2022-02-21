@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @if($portfolio)
            @foreach ($portfolio as $item)
                <li>{{ $item['title'] }}</li>        
            @endforeach
        @else
            <p>No hay proyectos por mostrar</p>
        @endif
    </ul>
@endsection