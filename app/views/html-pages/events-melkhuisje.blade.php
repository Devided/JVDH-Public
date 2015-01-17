@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/kamp.jpg") }});padding-top: 30px;margin-bottom: 30px; height:180px;">
            <div class="page_header_left">
                <h1 class="page_title" style="margin-left: 20px; color:white;">Events</h1>
            </div>
            <div class="page_header_right">
            </div>
        </div>
        <div class="clearfix">
            <div class="gallery_item_details_list clearfix page_margin_top" >
                <div class="gallery_item_details clearfix">
                    <div class="columns no_width">
                        <div>
                            <div class="">
                                <h2>Vakantie- sportkampen</h2>
                                <p>
                                    Een sportieve vakantieweek voor kinderen tussen de 6 en 12 jaar. Het uitgebreide sportpakket met de elke dag terugkerende tennislessen en een uitgebreide lunch vormen de rode draad in het 5 daagse weekprogramma.<br><br>In de middag staat het gevarieerde programma bol van creativiteit in combinatie met spelsporten, golfen, mountainebiken, squashen, zwemmen, klimmen en nog diverse andere spellen. Naast leerzaam is het kamp vooral recreatief en gezellig.<br>Er wordt regelmatig voor drankjes gezorgd. Om 9.00 kunnen de kinderen worden gebracht en om 17.00 uur weer worden opgehaald.<br><br>Een uitkomst voor werkende ouders.
                                </p>
                                <br><br>
                                <h2>Tenniskamp H.L.T.C. 't Melkhuisje</h2>
                                <p>
                                    Voor kinderen van 7 t/m 12 jaar<br>
                                    Maandag t/m vrijdag van 09:00-17:00<br>
                                    Week 28 (maandag 6 juli t/m vrijdag 10 juli)<br><br>

                                    <b>Onderdelen:</b><br>
                                    3 uur per dag tennissen<br>
                                    Mountaine biken<br>
                                    Zwemmen<br>
                                    Golfen<br>
                                    Conditie trainen<br>
                                    Wedstrijden spelen<br>
                                    Iedere dag uitgebreid lunchen<br>
                                    Afsluiting met barbecue voor alle kinderen met een drankje voor de ouders<br><br>

                                    <b>Leraren:</b><br>
                                    Jeroen van den Heuvel en nog 2 andere leraren<br><br>

                                    <b>Kosten:</b><br>
                                    265 Euro p.p  ( hier zit alles bij inbegrepen)<br>
                                    Minimaal 20 cursisten<br><br>

                                    <a href="{{ action('tenniskamp', ['clubid' => $clubid]) }}">Klik hier</a> om in te schrijven.
                                </p>
                                <h2>Aankomende events</h2>
                                <table style="width:400px; margin-top:20px; margin-bottom:20px;">
                                    <tr>
                                        <td>Conditietraining</td>
                                        <td>15-12-2014</td>
                                        <td><a href="#">inschrijven</a></td>
                                    </tr>
                                    <tr>
                                        <td>Dubbel clinic</td>
                                        <td>19-12-2014</td>
                                        <td><a href="#">inschrijven</a></td>
                                    </tr>
                                    <tr>
                                        <td>Conditietraining</td>
                                        <td>7-1-2015</td>
                                        <td><a href="#">inschrijven</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@include('html-pages.partials._footer')