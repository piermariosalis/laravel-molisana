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

  <div class="welcome_page">
    <h2>
        Benvenuto su Molisana
    </h2>

    <p>
        Scopri i nostri prodotti e Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas.
    </p>
  
  </div>
@endsection   