@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Gegevens wijzigen</h1>
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
                                Gegevens wijzigen
                            </h2>
                            {{ Form::open(['class' => 'contact_form']) }}

                            @include('html-pages.partials._errors')

                            <fieldset class="left">
                                <label>Volledige naam</label>
                                <div class="block">
                                    {{ Form::text('naam', $user->naam, ['id' => 'naam', 'class' => 'text_input', 'placeholder' => 'Volledige naam']) }}
                                </div>
                                <label>Emailadres</label>
                                <div class="block">
                                    {{ Form::text('emailadres', $user->email, ['id' => 'emailadres', 'class' => 'text_input', 'placeholder' => 'voorbeeld@example.com']) }}
                                </div>
                            </fieldset>

                            <div style="clear:both;"></div>

                            {{ Form::button('Wijzigen', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

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