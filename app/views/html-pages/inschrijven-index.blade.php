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
                                    Ingeschreven personen
                                </h2>
                                <p>
                                    Momenteel heeft u nog niemand ingeschreven, klik hieronder om de eerste persoon in te schrijven.
                                </p>

                                <a class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;margin-bottom:40px;" title="Details">Nieuwe persoon inschrijven</a>

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