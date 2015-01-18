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
                                        <option value="overig">overig</option>
                                    </select>
                                </div>
                                <label>Seizoen</label>
                                <div class="block">
                                   <select name="seizoen">
                                       <option value="Zomer">Zomer</option>
                                       <option value="Winter">Winter</option>
                                   </select>
                                </div>
                                <label>Aantal personen</label>
                                <div class="block">
                                    <select name="aantal">
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">Privéles</option>
                                    </select>
                                </div>
                                <label>Prijs (zonder euro teken)</label>
                                <div class="block">
                                    {{ Form::text('prijs', null, ['id' => 'prijs', 'class' => 'text_input', 'placeholder' => '']) }}
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