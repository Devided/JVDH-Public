@include('html-pages.partials._header')

{{ HTML::style('style/table.css') }}

<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <div class="page_header clearfix">
            <div class="page_header_left">
                <h1 class="page_title">Inschrijven voor tennisles</h1>
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
                                    Ingeschreven personen
                                </h2>
                                @if(is_null($inschrijvingen))
                                <p>
                                    Momenteel heeft u nog niemand ingeschreven, klik hieronder om de eerste persoon in te schrijven.
                                </p>
                                @else
                                <br><br>
                                <table class="table table-striped" style="width:80%; margin-top:50px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Club</th>
                                        <th>Type</th>
                                        <th>Acties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inschrijvingen as $inschrijving)
                                    <tr>
                                        <?php $part = $inschrijving->part->first(); ?>
                                        <td>{{ $inschrijving->naam }}</td>
                                        <td>{{ $inschrijving->club }}</td>
                                        @if($part->grootte == 1)
                                        <td>{{ $part->seizoen }}, privéles, €{{ $part->prijs }}</td>
                                        @else
                                        <td>{{ $part->seizoen }}, groep van {{ $part->grootte }} personen, €{{ $part->prijs }}</td>
                                        @endif
                                        <td>actions</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                                <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.1') }}" style="margin-top:20px;margin-bottom:40px;" title="Details">Nieuw persoon inschrijven</a>

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