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
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                    <a class="more light icon_small_arrow margin_right_white" style="margin-top: 11px;" href="#" title="Meer Informatie">Meer Informatie</a>
                </div>
            </li>
            <li class="home_box dark_blue">
                <h2>
                    Agenda			</h2>
                <ul class="items_list thin dark_blue opening_hours">
                    <li class="clearfix">
					    <span>Zondag - Maandag</span>
                        <div class="value">Gesloten</div>
                    </li>
                    <li class="clearfix">
					<span>Dinsdag - Vrijdag</span>
                        <div class="value">
                            9.30 - 17.30 uur					</div>
                    </li>
                    <li class="clearfix">
					<span>
						Zaterdag					</span>
                        <div class="value">
                            9.30 - 16.30 uur					</div>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="page_layout page_margin_top clearfix">
            <div class="page_left">
                <h3 class="box_header">OVER TENNISSCHOOL JEROEN VAN DEN HEUVEL</h3>
                <div class="columns clearfix">
                    <p>Tennisschool Jeroen van den Heuvel verzorgt sinds 2005 tennislessen voor een aantal verenigingen in 't Gooi en omstreken. Verder organiseren wij tenniskampen,clinics, leveren wij leraren aan diverse verenigingen en adviseren wij tennisclubs. Kortom, wij bieden tennisclubs een totale service ten aanzien van zowel recreatief als prestatief tennis. Tennisschool Jeroen van den Heuvel staat voor kwaliteit (d.w.z. gekwalificeerde en ervaren tennisleraren die in het bezit zijn van een KNLTB A t/m C licentie).</p>
                </div>
            </div>
            <div class="page_right">
                <div class="sidebar_box first">
                    <h3 class="box_header">
                        INLOGGEN OM IN TE SCHRIJVEN				</h3>
                    <form class="contact_form" id="contact_form" method="post" action="">
                        <fieldset class="left">
                            <label>Emailadres</label>
                            <div class="block">
                                <input class="text_input"type="text">
                            </div>
                            <label>Wachtwoord</label>
                            <div class="block">
                                <input class="text_input" type="password" value="">
                            </div>
                        </fieldset>
                    </form>

                    <a class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;" title="Details">Inloggen</a>

                    <div class="sidebar_box second">
                        <h3>
                            Heeft u nog geen account?
                        </h3>
                        <p>
                            Om in te schrijven voor tennisles heeft u een account nodig.<br />Dit duurt nog geen twee minuten om aan te maken.
                        </p>
                        <a  href="{{ action('registreren') }}"class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;" title="Details">Registreren</a>
                    </div>
                </div>
            </div>
        </div>

        <ul class="columns_3 page_margin_top clearfix">
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