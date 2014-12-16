@include('html-pages.partials._header')

    <!-- slider -->
    <ul class="slider">
        <li style="background-image: url('{{ asset('img/slide.jpg') }}');">
            &nbsp;
        </li>
    </ul>
    <div class="page relative noborder">
        <!-- slider content -->
        <div class="slider_content_box clearfix">
            <div class="slider_content" style="display: block;">

            </div>
        </div>

        <!-- home box -->
        <ul class="home_box_container clearfix">
            <li class="home_box light_blue">
                <h2>
                    <a href="?page=contact" title="Emergency Case">Klaar voor het nieuwe seizoen?</a>
                </h2>
                <div class="news clearfix">
                    <p class="text">
                       Schrijf je alvast in voor tennisles voor het aankomende seizoen.
                        <br>
                       <a class="more light icon_small_arrow margin_right_white" href="{{ action('inschrijven') }}" title="Contactgegevens">Inschrijven</a>
                </div>
            </li>
            <li class="home_box blue">
                <h2>
                    <a href="#" title="Doctors Timetable">
                        Club advies/consultancy				</a>
                </h2>
                <div class="news clearfix">
                    <h5 style="color:#fff; margin-top:-5px;"><b>Clubscan</b> - <span style="font-size:12px;"><em>hoe staat jouw tennisclub ervoor en punten die verbeterd kunnen worden</em></span></h5><br>

                    <h5 style="color:#fff;"><b>Detachering</b> - <span style="font-size:12px;"><em>Op korte termijn een tennisleraar nodig met de juiste papieren en diploma's</em></span></h5>
                    <a class="more light icon_small_arrow margin_right_white" style="margin-top: 11px;" href="{{ action('consultancy') }}" title="Meer Informatie">Meer Informatie</a>
                </div>
            </li>
            <li class="home_box dark_blue">
                <h2>
                    Event van de week
                </h2>
                <div class="news clearfix">
                    <p class="text">
                        <b><u>Conditietraining</u></b><br>Maandag 15 December
                        <br>
                        <a class="more light icon_small_arrow margin_right_white" href="{{ action('events') }}" title="Contactgegevens">Events</a>
                </div>
            </li>
        </ul>
        <div class="page_layout page_margin_top clearfix">
            <div class="page_left">
                <h3 class="box_header">OVER DE TENNISSCHOOL</h3>
                <div class="columns clearfix">
                    <img style="margin-top:30px;" src="{{ asset('img/home_bal_nw.jpg') }}">
                    <p>Tennisschool Jeroen van den Heuvel verzorgt sinds 2005 tennislessen voor een aantal verenigingen in 't Gooi en omstreken.<br>Verder organiseren wij tenniskampen,clinics, leveren wij leraren aan diverse verenigingen en adviseren wij tennisclubs. Kortom, wij bieden tennisclubs een totale service ten aanzien van zowel recreatief als prestatief tennis.<br><br>Tennisschool Jeroen van den Heuvel staat voor kwaliteit (d.w.z. gekwalificeerde en ervaren tennisleraren die in het bezit zijn van een KNLTB A t/m C licentie).
                    <br><br>
                    <img src="{{ asset('img/fb.png') }}" height="20"> <a href="https://www.facebook.com/tennisschooljvandenh">Volg TSJH op Facebook</a>
                    <img src="{{ asset('img/tw.png') }}" height="20" style="margin-left:20px;"> <a href="https://www.twitter.com/tennisschooljvandenh">Volg TSJH op Twitter</a>
                    </p>
                </div>
            </div>
            <div class="page_right">
                <div class="sidebar_box first">
                    @if(!Auth::user())
                    <h3 class="box_header">
                        INLOGGEN OM IN TE SCHRIJVEN
                    </h3>

                    {{ Form::open(['url' => 'login', 'class' => 'contact_form']) }}

                    @include('html-pages.partials._errors')

                    <fieldset class="left">
                        <label>Emailadres</label>
                        <div class="block">
                            {{ Form::text('emailadres', null, ['id' => 'emailadres', 'class' => 'text_input', 'placeholder' => 'voorbeeld@example.com']) }}
                        </div>
                        <label>Wachtwoord</label>
                        <div class="block">
                            {{ Form::password('password', ['class' => 'text_input', 'placeholder' => 'Wachtwoord']) }}
                        </div>
                    </fieldset>

                    {{ Form::button('Inloggen', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

                    {{ Form::close() }}

                    <hr style="margin-right:30px;">

                    <div style="display: inline-block; margin: 0px;"><p>Om in te schrijven voor tennisles heeft u een account nodig.</p><a class="btn btn-text" href="{{ action('registreren') }}" style="text-align: right;">Een account aanmaken</a></div>
                    @else
                    <h3 class="box_header">
                        Welkom, {{{ Auth::user()->naam }}}
                    </h3>

                    <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven') }}" style="margin-top:20px;" title="Details">Bekijk mijn inschrijvingen</a>

                    <div style="display: inline-block; margin: 27px 0px 0px 0px;">Bent u niet {{{ Auth::user()->naam }}}? <a class="btn btn-text" href="{{ action('logout') }}" style="text-align: right;">Uitloggen</a></div>
                    @endif
                </div>
            </div>
        </div>

        <ul class="columns_3 page_margin_top clearfix" style="margin-top:10px;">
            <li class="column">
                <center>
                    <img src="{{ asset('img/logos/babolat.jpg') }}" style="width:150px;">
                </center>
            </li>
            <li class="column">
                <center>
                    <img src="{{ asset('img/logos/kloosterman.jpg') }}" style="width:150px;">
                </center>
            </li>
            <li class="column">
                <center>
                    <img src="{{ asset('img/logos/silica.jpg') }}" style="width:150px;">
                </center>
            </li>
        </ul>

    </div>



@include('html-pages.partials._footer')