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
                                <table class="table table-striped" style="width:100%; margin-top:0px; margin-bottom: 75px;">
                                    <thead>
                                    <tr>
                                        <th>Club</th>
                                        <th>Naam</th>
                                        <th>Print</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inschrijvingen as $inschrijving)
                                    <tr>
                                        <td>{{{ $inschrijving->club }}}</td>
                                        <td>{{{ $inschrijving->naam }}}</td>
                                        <td><a href="{{ action('beheer.inschrijvingen.print', ['id' => $inschrijving->id]) }}">Print inschrijving</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{ action('inschrijven.beheren') }}">Terug naar inschrijvingen</a>
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