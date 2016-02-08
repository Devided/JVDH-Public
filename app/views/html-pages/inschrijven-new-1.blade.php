@include('html-pages.partials._header')

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
                            <div class="details_box">
                                <h2>
                                    Stap 1: Kies de club
                                </h2>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                        <div class="columns columns_4 page_margin_top clearfix">
                            <ul class="column">
                                <li class="item_content clearfix">
                                    <div class="text noicon">
                                        <h3>
                                            H.L.T.C. 't Melkhuisje
                                        </h3>
                                        <div style="margin-top: 20px; height:190px;">
                                            <img src="{{ asset('/img/clublogo/melkhuisje.jpg') }}" style="margin:auto; margin-top:60px; width: 80%;">
                                        </div>
                                        <br />

                                        <div style="padding-left: 25%; min-width: 100%;">
                                            <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.2',['clubid' => 'melkhuisje']) }}" style="margin-bottom:40px;" title="Details">Kies</a>
                                        </div>
                                </li>
                            </ul>
                            <ul class="column">
                                <li class="item_content clearfix">
                                    <div class="text noicon">
                                        <h3>
                                            A.L.T.C. Abcoude
                                        </h3>
                                        <div style="margin-top: 20px; height: 190px;">
                                            <img src="{{ asset('/img/clublogo/abcoude.png') }}" style="margin:auto; margin-top:10px; width:80%;">
                                        </div>
                                        <br />

                                        <div style="padding-left: 25%; min-width: 100%;">
                                            <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.2',['clubid' => 'abcoude']) }}" style="margin-bottom:40px;" title="Details">Kies</a>
                                        </div>
                                </li>
                            </ul>
                            <ul class="column">
                                <li class="item_content clearfix">
                                    <div class="text noicon">
                                        <h3>
                                            T.C. Voordaan
                                        </h3>
                                        <div style="margin-top: 20px; height: 190px;">
                                            <img src="{{ asset('/img/clublogo/voordaan.png') }}" style="margin:auto; margin-top:55px; width: 80%;">
                                        </div>
                                        <br />

                                        <div style="padding-left: 25%; min-width: 100%;">
                                            <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.2',['clubid' => 'voordaan']) }}" style="margin-bottom:40px;" title="Details">Kies</a>
                                        </div>
                                </li>
                            </ul>
                            <ul class="column">
                                <li class="item_content clearfix">
                                    <div class="text noicon">
                                        <h3>
                                            PARK Tennis
                                        </h3>
                                        <div style="margin-left:20px; margin-top: 20px; height: 190px;">
                                            <img src="{{ asset('/img/clublogo/park.gif') }}" style="margin:auto; margin-top:25px;">
                                        </div>
                                        <br />

                                        <div style="padding-left: 25%; min-width: 100%; margin-top:-40px;">
                                            <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven.nieuw.2',['clubid' => 'park']) }}" style="margin-top:40px; margin-bottom:40px;" title="Details">Kies</a>
                                        </div>
                                </li>
                            </ul>
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