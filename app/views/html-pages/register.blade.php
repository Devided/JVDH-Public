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
                                <form class="contact_form" id="contact_form" method="post" action="">
                                    <fieldset class="left">
                                        <label>Emailadres</label>
                                        <div class="block">
                                            <input class="text_input"type="text" id="emailadres" placeholder="voorbeeld@gmail.com">
                                        </div>
                                        <label>Wachtwoord</label>
                                        <div class="block">
                                            <input class="text_input" type="password" value="" placeholder="wachtwoord">
                                        </div>
                                        <label>Wachtwoord herhalen</label>
                                        <div class="block">
                                            <input class="text_input" type="password" value="" placeholder="wachtwoord nogmaals">
                                        </div>
                                    </fieldset>
                                </form>

                                <a class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;margin-bottom:40px;" title="Details">Registreren</a>

                                <div style="clear:both;"></div>
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