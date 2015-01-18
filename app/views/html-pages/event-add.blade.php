@include('html-pages.partials._header')

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
                                Nieuw onderdeel
                            </h2>
                            {{ Form::open(['class' => 'contact_form']) }}

                            @include('html-pages.partials._errors')

                            <fieldset class="left">
                                <label>Club</label>
                                <div class="block">
                                    <select name="club">
                                        <option value="melkhuisje">H.L.T.C. 't Melkhuisje</option>
                                        <option value="abcoude">Abcoude</option>
                                        <option value="voordaan">T.C. Voordaan</option>
                                    </select>
                                </div>
                                <label>Naam</label>
                                <div class="block">
                                   <input type="text" name="naam" placeholder="naam...">
                                </div>
                                <label>Datum</label>
                                <div class="block">
                                    <input type="text" name="datum" placeholder="1-1-2015">
                                </div>
                            </fieldset>

                            <div style="clear:both;"></div>

                            {{ Form::button('Opslaan', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

                            {{ Form::close() }}
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