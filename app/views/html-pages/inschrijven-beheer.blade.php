@include('html-pages.partials._header')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{ HTML::style('style/table.css') }}
<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});height: 90px;padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; margin-top:-5px;color:white;">Beheer</h1>
        </div>
        <div class="page_header_right">
        </div>
    </div>
    <div class="clearfix">
        <div class="gallery_item_details_list clearfix page_margin_top" style="border-bottom: none;">
            <div class="gallery_item_details clearfix">
                <div class="columns no_width">
                    <div class="column">
                        <div class="details_box" style="width:100%">
                            <h2>
                                Beheer
                            </h2>

                            <fieldset class="left">
                                <p>
                                    <b>Inschrijvingen:</b><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'melkhuisje']) }}">Download alle inschrijvingen (melkhuisje)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'abcoude']) }}">Download alle inschrijvingen (abcoude)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'voordaan']) }}">Download alle inschrijvingen (voordaan)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'overig']) }}">Download alle inschrijvingen (overig)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'all']) }}">Download alle inschrijvingen (alle clubs)</a><br><br>
                                    <b>Onderdelen:</b><br>
                                    <a href="{{ action('beheer.add') }}">Nieuw onderdeel aanmaken</a>
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Seizoen</th>
                                        <th>Prijs</th>
                                        <th>Groepgrootte</th>
                                        <th>Club</th>
                                        <th>Status</th>
                                        <th>Verwijderen</th>
                                        <th>Inschrijvingen</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($onderdelen as $onderdeel)
                                    <tr>
                                        <td>{{ $onderdeel->seizoen }}</td>
                                        <td>{{ $onderdeel->prijs }}</td>
                                        <td>{{ $onderdeel->grootte }}</td>
                                        <td>{{ $onderdeel->clubid }}</td>
                                        @if($onderdeel->active)
                                        <td>Actief (<a href="{{ action('beheer.toggle',['onderdeel' => $onderdeel->id]) }}">wijzig</a>)</td>
                                        <td><a href="javascript:alert('Het onderdeel kan alleen verwijderd worden als het niet actief is.')"><i class="fa fa-ban" style="color: darkred"> verwijderen</i></a></td>
                                        @else
                                        <td>Inactief (<a href="{{ action('beheer.toggle',['id' => $onderdeel->id]) }}">wijzig</a>)</td>
                                        <td><a href="{{ action('beheer.delete',['id' => $onderdeel->id]) }}"><i class="fa fa-ban" style="color: darkred"> verwijderen</i></a></td>
                                        @endif
                                        <td>{{ $onderdeel->inschrijvingen }}</td>
                                        <td><a href="{{ action('beheer.onderdeel.download', ['id' => $onderdeel->id]) }}">Download</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <b>Events:</b><br>
                                <a href="{{ action('event.add') }}">Nieuw event aanmaken</a>
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Datum</th>
                                        <th>Club</th>
                                        <th>Verwijderen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->naam }}</td>
                                        <td>{{ $event->datum }}</td>
                                        <td>{{ $event->club }}</td>
                                        <td><a href="{{ action('event.delete',['id' => $event->id]) }}"><i class="fa fa-ban" style="color: darkred"> verwijder</i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <b>Tenniskamp:</b><br>
                                <a href="{{ action('beheer.tenniskamp.download') }}">Download alle tenniskamp inschrijvingen</a> (totaal {{ $campamount }} inschrijving(en))

                                <br><br>

                                <a href="{{ action('inschrijven') }}">Terug naar inschrijvingen</a>
                                </p>
                            </fieldset>

                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<script>
    $('#naam').focus();
</script>
@include('html-pages.partials._footer')