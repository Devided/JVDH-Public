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
        <ul class="home_box_container clearfix columns full_width">
            <li class="home_box light_blue column_left">
                <h2>
                    <a href="?page=contact" title="Emergency Case">
                        Al klaar voor het nieuwe seizoen?	</a>
                </h2>
                <div class="news clearfix">
                    <p class="text">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi commodi cupiditate deserunt dolorem doloremque eius facilis, laborum laudantium officiis optio quis reiciendis sequi totam ut voluptatem! Aliquam, molestias?				</p>
                    <a class="more light icon_small_arrow margin_right_white" href="?page=contact" title="Contactgegevens">Inschrijven</a>
                </div>
            </li>
            <li class="home_box dark_blue column_right">
                <h2>
                    Agenda			</h2>
                <ul class="items_list thin dark_blue opening_hours">
                    <li class="clearfix">
					<span>
						Zondag - Maandag					</span>
                        <div class="value">
                            Gesloten					</div>
                    </li>
                    <li class="clearfix">
					<span>
						Dinsdag - Vrijdag					</span>
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
                <h3 class="box_header">
                    OVER ONS			</h3>
                <div class="columns clearfix">
                    <p>Tennisschool Jeroen van den Heuvel verzorgt sinds 2005 tennislessen voor een aantal verenigingen in 't Gooi en omstreken. Verder organiseren wij tenniskampen,clinics, leveren wij leraren aan diverse verenigingen en adviseren wij tennisclubs. Kortom, wij bieden tennisclubs een totale service ten aanzien van zowel recreatief als prestatief tennis. Tennisschool Jeroen van den Heuvel staat voor kwaliteit (d.w.z. gekwalificeerde en ervaren tennisleraren die in het bezit zijn van een KNLTB A t/m C licentie).
<br><br>
                    Eigenaar Jeroen van den Heuvel is een gepassioneerd tennisser en heeft een aantal jaren in de top 50 van Nederland meegespeeld. Hij is in het bezit van de KNLTB licenties A/B/C. De afgelopen jaren is Jeroen als hoofdtrainer werkzaam geweest bij diverse verenigingen in het Gooi/Amsterdam en Utrecht.Verder is hij gedurende drie jaar als hoofdcoach betrokken geweest bij het Hilverheide Eredivisie team met topspelers als Martin Verkerk, Michaela Krajicek, Peter Wessels en Melle van Gemerden. Het team van Hilverheide is onder leiding van Jeroen twee keer landskampioen geworden.
                </p>
                </div>
            </div>
            <div class="page_right">
                <div class="sidebar_box first">
                    <h3 class="box_header">
                        INLOGGEN				</h3>
                    <form class="contact_form" id="contact_form" method="post" action="">
                        <fieldset class="left">
                            <label>Gebruikersnaam</label>
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
                </div>
            </div>
        </div>

    </div>

@include('html-pages.partials._footer')