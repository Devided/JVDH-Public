@include('html-pages.partials._header')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{ HTML::style('style/table.css') }}
<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Beheer</h1>
        </div>
        <div class="page_header_right">
        </div>
    </div>
    <div class="clearfix">
        <div class="gallery_item_details_list clearfix page_margin_top" style="border-bottom: none;">
            <div class="gallery_item_details clearfix">
                <div class="columns no_width">
                    <div class="column_left">
                        <div class="details_box">
                            <h2>
                                Beheer
                            </h2>

                            <fieldset class="left">
                                <p>
                                    <b>Inschrijvingen:</b><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'melkhuisje']) }}">Download inschrijvingen (melkhuisje)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'abcoude']) }}">Download inschrijvingen (abcoude)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'voordaan']) }}">Download inschrijvingen (voordaan)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'overig']) }}">Download inschrijvingen (overig)</a><br>
                                    <a href="{{ action('beheer.download', ['clubid' => 'all']) }}">Download inschrijvingen (alle clubs)</a><br><br>
                                    <b>Onderdelen:</b><br>
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Seizoen</th>
                                        <th>Aantal</th>
                                        <th>Club</th>
                                        <th>Status</th>
                                        <th>Verwijderen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($onderdelen as $onderdeel)
                                    <tr>
                                        <td>{{ $onderdeel->seizoen }}</td>
                                        <td>{{ $onderdeel->grootte }}</td>
                                        <td>{{ $onderdeel->clubid }}</td>
                                        @if($onderdeel->active)
                                        <td>Actief (<a href="{{ action('beheer.toggle',['onderdeel' => $onderdeel->id]) }}">wijzig</a>)</td>
                                        @else
                                        <td>Inactief (<a href="{{ action('beheer.toggle',['id' => $onderdeel->id]) }}">wijzig</a>)</td>
                                        @endif
                                        <td><a href="{{ action('beheer.delete',['id' => $onderdeel->id]) }}"><i class="fa fa-ban" style="color: darkred"> verwijderen</i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table><br>
                                <a href="{{ action('beheer.add') }}">Nieuw onderdeel aanmaken</a><br><br>


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