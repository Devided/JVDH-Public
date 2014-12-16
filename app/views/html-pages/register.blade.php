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
                        <div class="column_left">
                            <div class="details_box">
                                <h2>
                                    Registreren
                                </h2>
                                {{ Form::open(['url' => 'registreren', 'class' => 'contact_form']) }}

                                @include('html-pages.partials._errors')

                                <fieldset class="left">
                                    <label>Emailadres</label>
                                    <div class="block">
                                        {{ Form::text('emailadres', null, ['id' => 'emailadres', 'class' => 'text_input', 'placeholder' => 'voorbeeld@example.com']) }}
                                    </div>
                                    <label>Wachtwoord</label>
                                    <div class="block">
                                        {{ Form::password('password', ['class' => 'text_input', 'placeholder' => 'Wachtwoord']) }}
                                    </div>
                                    <label>Wachtwoord nogmaals</label>
                                    <div class="block">
                                        {{ Form::password('password_again', ['class' => 'text_input', 'placeholder' => 'Wachtwoord']) }}
                                    </div>
                                </fieldset>

                                <div style="clear:both;"></div>

                                {{ Form::button('Registreren', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

                                {{ Form::close() }}
                            </div>
                        </div>
                        <div class="column_right" style="margin:25px auto;">
                            <div class="details_box">
                                <h2>Heeft u al een account?</h2>
                                <p>
                                    Als u reeds een account heeft aangemaakt, dan kunt u inloggen met de onderstaande knop.<br />
                                    <a  href="{{ action('login') }}"class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;" title="Details">Inloggen</a>
                                </p>
                            </div>
                        </div>
                        <div class="column_right" style="margin:25px auto;">
                            <div class="details_box">
                                <h2>Wachtwoord vergeten?</h2>
                                <p>
                                    Als u uw wachtwoord bent vergeten, kunt u dat eenvoudig opvragen.<br />
                                    <a  href="{{ action('login.forgot') }}"class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;" title="Details">Wachtwoord vergeten</a>
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