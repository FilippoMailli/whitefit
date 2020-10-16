
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

            <h3 id="contattaci-freccia">CONTATTACI<br></h3>
            <img id="immagine-freccione" src="{{asset('storage/arrowdown.png')}}" alt="">
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
                <h2>SALA PESI E CORSI</h2>
            </div>
            <div class="informazioni-logo-sx">
                <h4>INFORMAZIONI FITNESS HOUSE</h4>
            </div>
        </div>
        <div class="parte-dx">
            <div class="logo-dx">
                IMMAGINE LOGO WHITE TEAM
            </div>
            <div class="test-logo-dx">
                <h2>FIGHT ACADEMY</h2>
            </div>
            <div class="informazioni-logo-dx">
                <h4>INFORMAZIONI WHITE TEAM FIGHT ACADEMY</h4>
            </div>
        </div>
    </div>
    <div class="divisorio">

    </div>

    <div class="divisorio-orari">

        <div class="tabella-orari" style="background-image: url({{asset('storage/sfondoorari1.jpg')}})">
            <div class="tabellina">
                <h1>TABELLA ORARI</h1>
                <div class="giorni-settimana">
                    <span>lunedi</span>
                    <span>martedì</span>
                    <span>mercoledì</span>
                    <span>giovaedì</span>
                    <span>venerdì</span>
                    <span>sabato</span>
                    <span>domenica</span>
                </div>
                <div class="tabellina-divisa">
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                    <div class="colonna1 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
                            <span>8.30-9.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero bjjbaby-font">
                            <span>BJJ BABY</span>
                            <span>16.30-17.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.30-19.15</span>
                        </div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>19.15-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>20.10-21.10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divisorio" id="altezza-incremento">
        <div class="divisorio-contatti">
            <div class="contatti-sx">
                IMG-CELLULARE : 3518875107 <br>
                IMG-INDIRIZZO : VIA DELL'INDUSTRA, 5 - CASTELNUOVO DEL GARDA (VR)<br>
                EMAIL: ???<br>
                FORM EMAIL CON POSSIBILITA' DI INVIO<br>
            </div>
            <div class="contatti-dx">
                IMG GOOGLA MAPS INTERATTIVA CON INDIRIZZO MARCATO
            </div>
        </div>
    </div>
</div>
@endsection
