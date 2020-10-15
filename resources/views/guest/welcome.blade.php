
@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div style="background-image: url({{asset('storage/sfondopesi.jpg')}})" class="container container-top">
        <div class="container-testo-top">
            <h1 id="testata">WHITEFIT</h1>
            <h2 id="testo-testata">FRASE FIGA MOTIVAZIONALE</h2>
            <div class="bottoni-fila">
                <a href="{{ROUTE('whitefit')}}"><button class="ml-20" id="btn-whiteteam" type="button" name="button">IMG WHITEFIT</button></a>
                <a href="{{ROUTE('whiteteam')}}"><button id="btn-whiteteam" type="button" name="button">IMG WHITETEAM</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
