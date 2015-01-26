@include('html-pages.partials._header')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{ HTML::style('style/table.css') }}

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});height: 90px;padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="main-left: 20px;margin-top:-5px; color:white;">Inschrijven</h1>
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
                                    Ingeschreven personen @if($admin)
                                    (<a href="{{ action('inschrijven.beheren') }}">beheren</a>)
                                    @endif
                                </h2>
                                <p style="margin-top:20px;">
                                    <b>Uw gegevens (<a href="{{ action('inschrijven.wijzig') }}">wijzigen</a>)</b><br>
                                    {{{ $user->naam }}}<br>
                                    {{{ $user->email }}}
                                </p>
                                @if(empty($inschrijvingen))
                                <p>
                                    Momenteel heeft u nog niemand ingeschreven, klik hieronder om de eerste persoon in te schrijven.
                                </p>
                                @else
                                <br><br>
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Club</th>
                                        <th>Type</th>
                                        <th>Lesdata</th>
                                        <th>Uitschrijven</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inschrijvingen as $inschrijving)
                                    <tr>
                                        <td>{{ $inschrijving->naam }}</td>
                                        <td>{{ $inschrijving->club }}</td>
                                        @if($inschrijving->part_grootte == 1)
                                        <td>{{ $inschrijving->part_seizoen }}, privéles, €{{ $inschrijving->part_prijs }}</td>
                                        @else
                                        <td>{{ $inschrijving->part_seizoen }}, groep van {{ $inschrijving->part_grootte }} personen, €{{ $inschrijving->part_prijs }}</td>
                                        @endif
                                        <td><a href="/lesdata/{{ $inschrijving->club }}.pdf"><i class="fa fa-calendar"> lesdata</i></a></td>
                                        <td><a href="{{ action('uitschrijven',['id' => $inschrijving->id]) }}"><i class="fa fa-ban" style="color: darkred"> uitschrijven</i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                                <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.1') }}" style="margin-top:20px;margin-bottom:0px;" title="Details">Nieuw persoon inschrijven tennisles</a>

                                <p style="margin-top:-30px;">
                                    <b>Inschrijven voor tenniskamp? <a href="{{ action('events') }}">Klik hier</a></b><br><br><br>
                                    Als u inschrijft, gaat u akkoord met de <a href="{{ action('inschrijven.voorwaarden') }}">voorwaarden</a>.
                                </p>

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
    $('#emailadres').focus();
</script>
@include('html-pages.partials._footer')