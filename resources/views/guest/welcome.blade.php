
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
                    <span>giovedì</span>
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
                    <div class="colonna2 divisione-in-colonne">
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>8.30-9.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>9.30-10.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK JUNIOR</span>
                            <span>17.30-18.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero kickfit-font">
                            <span>KICK FIT</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero brasilian-font">
                            <span>BRASILIAN JJ</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero krav-font">
                            <span>KRAV MAGA</span>
                            <span>20.00-21.30</span>
                        </div>
                    </div>
                    <div class="colonna3 divisione-in-colonne">
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>7.00-8.00</span>
                        </div>
                        <div class="spazio-nero bruciagrassi-font">
                            <span>BRUCIA GRASSI</span>
                            <span>8.30-9.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero gag-font">
                            <span>G.A.G.</span>
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
                    <div class="colonna4 divisione-in-colonne">
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>8.30-9.30</span>
                        </div>
                        <div class="spazio-nero fusion-font">
                            <span>FUSION</span>
                            <span>9.30-10.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero pilates-font">
                            <span>PILATES</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK JUNIOR</span>
                            <span>17.30-18.30</span>
                        </div>
                        <div class="spazio-nero step-font">
                            <span>STEP</span>
                            <span>18.00-19.00</span>
                        </div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero kickfit-font">
                            <span>KICK FIT</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-nero kickk1-font">
                            <span>KICK K1</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-nero krav-font">
                            <span>KRAV MAGA</span>
                            <span>20.00-21.30</span>
                        </div>
                    </div>
                    <div class="colonna5 divisione-in-colonne">
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>8.30-9.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero totalbody-font">
                            <span>TOTAL BODY</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero funzionale-font">
                            <span>FUNZIONALE</span>
                            <span>19.00-20.00</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero brasilian-font">
                            <span>BRASILIAN JJ</span>
                            <span>20.00-21.30</span>
                        </div>
                        <div class="spazio-bianco"></div>
                    </div>
                    <div class="colonna6 divisione-in-colonne">
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-nero totalbody-font">
                            <span>TOTAL BODY</span>
                            <span>12.30-13.15</span>
                        </div>
                        <div class="doppio-spazio salapesi-font">
                            <span>SALA PESI</span>
                            <span>09.00-17.00</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                    </div>
                    <div class="colonna7 divisione-in-colonne">
                        <div class="spazio-bianco"></div>
                        <div class="doppio-spazio salapesi-font">
                            <span>SALA PESI</span>
                            <span>09.00-13.00</span>
                        </div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                        <div class="spazio-bianco"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divisorio" id="altezza-incremento">
        <div class="divisorio-contatti">
            <div class="contatti-sx">
                <h2>CONTATTI</h2>
                <div class="contatti-specs">
                    <span class="contatti-info"><i class="fas fa-phone" id="icone-fontawesome-contatti"></i>3518875107</span>
                    <span class="contatti-info"><i class="fas fa-map-signs" id="icone-fontawesome-contatti"></i>VIA DELL'INDUSTRA, 5 - CASTELNUOVO DEL GARDA (VR)</span>
                    <div class="form-email-invio">
                        <h3 align="center">Hai bisogno di informazioni?</h3><br />
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="get" action="{{url('/')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Inserisci il tuo nome</label>
                                <input type="text" name="name" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Inserisci la tua Email</label>
                                <input type="text" name="email" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Inserisci il tuo messaggio</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn btn-info" value="Invia" />
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="contatti-dx">
                <div id="mappa-google">
                        <a href="https://www.google.com/maps/place/White+Team/@45.4283433,10.756603,17z/data=!4m12!1m6!3m5!1s0x4781e866dcd36411:0xa77f68fba6a055f!2sWhite+Team!8m2!3d45.4282379!4d10.7588024!3m4!1s0x4781e866dcd36411:0xa77f68fba6a055f!8m2!3d45.4282379!4d10.7588024">
                            <img class="mappa-immagine" src="{{asset('storage/mappa.png')}}" alt="Posizione google maps">
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('js/slider.js') }}" defer></script>
@endsection
