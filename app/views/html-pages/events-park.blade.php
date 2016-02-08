@include('html-pages.partials._header')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{ HTML::style('style/table.css') }}
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
                                <h2>Tenniskamp PARK Tennis</h2>
                                <p>
                                    Voor kinderen van 6 t/m 11 jaar<br>
                                    Maandag,woensdag en vrijdag van 09:00-17:00 Dinsdag en donderdag van 09:00-12:00<br>
                                    Maandag 11 juli t/m vrijdag 15 juli<br><br>

                                    <b>Onderdelen:</b><br>
                                    3 uur per dag tennissen<br>
                                    Pretpark<br>
                                    Zwemmen<br>
                                    Klimbos (Lage Vuursche)<br>
                                    Wedstrijden spelen<br>
                                    3 dagen uitgebreid lunchen<br><br>

                                    <b>Leraren:</b><br>
                                    Rogier en Roelof <br><br>

                                    <b>Kosten:</b><br>
                                    149,-  Euro p.p (hier zit alles bij inbegrepen)<br>
                                    Minimaal 14 cursisten<br><br>

                                    <a href="{{ action('tenniskamp', ['clubid' => $clubid]) }}">Klik hier</a> om in te schrijven.
                                    <!--<b>update: inschrijven is niet meer mogelijk, het tenniskamp is vol.</b>-->
                                </p>
                                <h2>Aankomende events</h2>
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Datum</th>
                                        <th>Inschrijven</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->naam }}</td>
                                        <td>{{ $event->datum }}</td>
                                        <td><a href="{{ action('event.inschrijven', ['id' => $event->id]) }}">Inschrijven</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
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
