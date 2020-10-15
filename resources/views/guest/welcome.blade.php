
@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div style="background-image: url({{asset('storage/palestra1.jpg')}})" class="container container-top">
        <div class="container-testo-top">
            <h1 id="testata">WHITEFIT</h1>
            <h2 id="testo-testata">Le uniche sfide che non puoi vincere sono quelle che scegli di perdere</h2>
            {{-- <div class="bottoni-fila">
                <a href="{{ROUTE('whitefit')}}"><button class="ml-20" id="btn-whiteteam" type="button" name="button">IMG WHITEFIT</button></a>
                <a href="{{ROUTE('whiteteam')}}"><button id="btn-whiteteam" type="button" name="button">IMG WHITETEAM</button></a>
            </div> --}}
        </div>
        <div class="frecciona-div">

            <h3 id="contattaci-freccia">CONTATTACI<br> <img id="immagine-freccione" src="{{asset('storage/arrowdown.png')}}" alt=""> </h3>
        </div>
    </div>
    <div class="divisorio">

    </div>
    <div class="container-divisione">
        <div class="parte-sx">
            <div class="logo-sx">
                IMMAGINE LOGO FITNESS HOUSE
            </div>
            <div class="test-logo-sx">
                SALA PESI E CORSI
            </div>
            <div class="informazioni-logo-sx">
                INFORMAZIONI FITNESS HOUSE
            </div>
        </div>
        <div class="parte-dx">
            <div class="logo-dx">
                IMMAGINE LOGO WHITE TEAM
            </div>
            <div class="test-logo-dx">
                FIGHT ACADEMY
            </div>
            <div class="informazioni-logo-dx">
                INFORMAZIONI WHITE TEAM FIGHT ACADEMY
            </div>
        </div>
    </div>
</div>
@endsection
