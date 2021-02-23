@extends('layouts.app')

@section('main')
<div class="product">
<div>
        <img src="{{$pasta[$id]['src-p'] }}" alt="">
    </div>

    <h2>{{$pasta[$id]['titolo'] }}</h2>
    <p><span>Tipo pasta:</span> {{$pasta[$id]['tipo'] }}</p>
    <p><span>Tempo cottura:</span> {{$pasta[$id]['cottura'] }}</p>
    <p><span>Peso:</span> {{$pasta[$id]['peso'] }} </p>
    <p><span>Descrizione:</span> {{$pasta[$id]['descrizione'] }}</p>
</div>
@endsection