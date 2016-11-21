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
                    <a href="?page=contact" title="Emergency Case">Inschrijven wintertraining</a>
                </h2>
                <div class="news clearfix" style="height:106px;">
                    <p class="text">
                       Schrijf je alvast in voor de wintertraining.
                        <br>
                    </p>
                    <a class="more light icon_small_arrow margin_right_white" href="{{ action('inschrijven') }}" title="Contactgegevens" style="margin-top:38px;">Inschrijven</a>
                </div>
            </li>
            <li class="home_box blue">
                <h2>
                    <a href="#" title="Doctors Timetable">
                        Club advies/consultancy				</a>
                </h2>
                <div class="news clearfix">
                    <h5 style="color:#fff; margin-top:-5px;"><b>Clubscan</b> - <span style="font-size:12px;"><em>hoe staat jouw tennisclub ervoor en punten die verbeterd kunnen worden</em></span></h5><br>

                    <h5 style="color:#fff;"><b>Detachering</b> - <span style="font-size:12px;"><em>Op korte termijn een tennisleraar nodig met de juiste papieren.</em></span></h5>
                    <a class="more light icon_small_arrow margin_right_white" style="margin-top: 11px;" href="{{ action('consultancy') }}" title="Meer Informatie">Meer Informatie</a>
                </div>
            </li>
            <li class="home_box dark_blue">
                <h2>
                    Aankomende events
                </h2>
                <div class="news clearfix" style="height:106px;">
                    <p class="text">
                        <b>Overzicht</b><br><i>Bekijk hier de laatste events voor uw club.</i>
                        <br>
                    </p>
                    <a class="more light icon_small_arrow margin_right_white" href="{{ action('events') }}" title="Contactgegevens" style="margin-top:63px;">Events</a>
                </div>
            </li>
        </ul>
        <div class="page_layout page_margin_top clearfix">
            <div class="page_left">
                <h3 class="box_header">OVER DE TENNISSCHOOL @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '1']) }}">(edit)</a>@endif @endif</h3>
                <div class="columns clearfix">
                    <img style="margin-top:30px; width:100%;" src="{{ asset('img/home_bal_nw.jpg') }}">
                    {{ Content::find(1)->body }}
                    <br><br>
                    <img src="{{ asset('img/fb.png') }}" height="20"> <a href="https://www.facebook.com/tennisschooljvandenh">Volg TSJH op Facebook</a><br>
                    <img src="{{ asset('img/tw.png') }}" height="20" style="margin-left:0px;"> <a href="https://www.twitter.com/tsjhjeroenvand1">Volg TSJH op Twitter</a>
                    <br>
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
