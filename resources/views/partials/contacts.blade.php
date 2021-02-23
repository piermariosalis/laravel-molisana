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

  <div class="contacts_page">
    <h2>
        CONTATTACI!
    </h2>

    <textarea name="Help" id="" cols="100" rows="30" placeholder="Facci sapere che ne pensi..."></textarea>
  </div>
@endsection   