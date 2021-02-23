@extends('layouts.app')

@section('main')
<header>

<div class="logo">
   <img src="{{ asset('img/logo.jpg') }}" alt="">
   </div>
   
       <nav>
       <ul>
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('products') }}" >PRODOTTI</a></li>
                    <li><a href="{{ route('contacts') }}">CONTATTI</a></li>
                </ul>
       </nav>

</header>
<main>
    
    <h2>LE LUNGHE</h2>
    <div class="container">
        @foreach($pasta_lunga as $key => $pastaL)
        <a class="card" href="{{ route('product', ['id' => $key]) }}" >
            <img src="{{$pastaL['src']}}" alt="">
            <div class="card_content">
                <h4>{{$pastaL['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

    <h2>LE CORTE</h2>
    <div class="container">
        @foreach($pasta_corta as $key => $pastaC)
        <a class="card" href="{{ route('product', ['id' => $key]) }}" >
            <img src="{{$pastaC['src']}}" alt="">
            <div class="card_content">
                <h4>{{$pastaC['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

    <h2>LE CORTISSIME</h2>
    <div class="container">
        @foreach($pasta_cortissima as $key => $pastaCi)
        <a class="card" href="{{ route('product', ['id' => $key]) }}" >
            <img src="{{$pastaCi['src']}}" alt="">
            <div class="card_content">
                <h4>{{$pastaCi['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

</main>

@endsection