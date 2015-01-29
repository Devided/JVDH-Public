@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Inschrijven tennisles</h1>
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
                                    Wachtwoord vergeten
                                </h2>
                                {{ Form::open(['url' => '/login/vergeten', 'class' => 'contact_form']) }}

                                @include('html-pages.partials._errors')

                                <fieldset class="left">
                                    <label>Emailadres</label>
                                    <div class="block">
                                        {{ Form::text('emailadres', null, ['id' => 'email','name' => 'email', 'class' => 'text_input', 'placeholder' => 'voorbeeld@example.com']) }}
                                    </div>
                                </fieldset>

                                <div style="clear:both;"></div>

                                {{ Form::button('Verstuur', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

                                {{ Form::close() }}
                            </div>
                        </div>
                        <div class="column_right">
                            <div class="details_box">
                                <h2>Hoe achterhaal ik mijn wachtwoord?</h2>
                                <p>
                                    Vul hiernaast het emailadres in dat u heeft gebruikt tijdens het maken van uw account. Wij sturen u daarna een email met een link om het wachtwoord opnieuw in te stellen.
                                </p>
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