@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <div class="page_header clearfix">
            <div class="page_header_left">
                <h1 class="page_title">Tenniskamp</h1>
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
                                    Inschrijven voor tenniskamp
                                </h2>
                                <div class="column_left">
                                    <div class="details_box">
                                        {{ Form::open(['action' => 'tenniskamp.post', 'class' => 'contact_form']) }}

                                        @include('html-pages.partials._errors')
                                        <input type="hidden" name="clubid" value="{{{ $clubid }}}">
                                        <fieldset class="left">
                                            <label>Volledige naam</label>
                                            <div class="block">
                                                {{ Form::text('naam', null, ['id' => 'naam', 'class' => 'text_input', 'placeholder' => 'Volledige naam']) }}
                                            </div>
                                            <label>Leeftijd</label>
                                            <div class="block">
                                                {{ Form::text('leeftijd', null, ['id' => 'leeftijd', 'class' => 'text_input', 'placeholder' => 'Leeftijd']) }}
                                            </div>
                                            <label>Geslacht</label>
                                            <div class="block">
                                                <select name="geslacht">
                                                    <option value="man">Man</option>
                                                    <option value="vrouw">Vrouw</option>
                                                </select>
                                            </div>
                                            <br><br><br>
                                            <label>Aantal jaar ervaring</label>
                                            <div class="block">
                                                {{ Form::text('ervaring', null, ['id' => 'ervaring', 'class' => 'text_input', 'placeholder' => 'Ervaring']) }}
                                            </div>
                                            <label>KNLTB nummer (optioneel)</label>
                                            <div class="block">
                                                {{ Form::text('knltb', null, ['id' => 'knltb', 'class' => 'text_input', 'placeholder' => 'KNLTB nummer']) }}
                                            </div>
                                            <br><br><br>
                                            <label>Verhindering (optioneel)</label>
                                            <div class="block">
                                                {{ Form::text('verhindering', null, ['id' => 'verhindering', 'class' => 'text_input', 'placeholder' => 'verhindering']) }}
                                            </div>
                                            <label>Opmerking (optioneel)</label>
                                            <div class="block">
                                                {{ Form::text('opmerking', null, ['id' => 'opmerking', 'class' => 'text_input', 'placeholder' => 'Bijv. bij wie in de groep.']) }}
                                            </div>
                                            <br><br><br>
                                            <label>Emailadres</label>
                                            <div class="block">
                                                {{ Form::text('email', null, ['id' => 'email', 'class' => 'text_input', 'placeholder' => 'test@voorbeeld.nl']) }}
                                            </div>
                                            <label>Telefoonnummer</label>
                                            <div class="block">
                                                {{ Form::text('telefoon', null, ['id' => 'telefoon', 'class' => 'text_input', 'placeholder' => '06-12345678']) }}
                                            </div>
                                            <input type="hidden" name="club" value="{{{ $clubid }}}">
                                        </fieldset>

                                        <div style="clear:both;"></div>

                                        {{ Form::button('Inschrijven', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

                                        {{ Form::close() }}
                                    </div>
                                </div>
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