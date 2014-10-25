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
                                    Inloggen
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
                                    </fieldset>
                                </form>

                                <a class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;margin-bottom:40px;" title="Details">Inloggen</a>

                                <div style="clear:both;"></div>

                                <a href="#">Wachtwoord vergeten?</a>
                            </div>
                        </div>
                        <div class="column_right">
                            <div class="details_box">
                                <h2>Waarom moet ik inloggen?</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ducimus eveniet iure, maiores nobis perferendis quo. Cupiditate delectus dicta dolore earum, ex harum laudantium maiores omnis perspiciatis quae recusandae similique. Cupiditate delectus dicta dolore earum, ex harum laudantium maiores omnis perspiciatis quae recusandae similique.
                                </p>
                            </div>
                        </div>
                        <div class="column_right" style="margin:25px auto;">
                            <div class="details_box">
                                <h2>Heeft u nog geen account?</h2>
                                <p>
                                    Het aanmaken van een account is vereist om u of meerdere personen in te schrijven. Dit duurt nog geen twee minuten om aan te maken.<br />
                                    <a  href="{{ action('registreren') }}"class="more blue icon_small_arrow margin_right_white" href="#" style="margin-top:20px;" title="Details">Registreren</a>
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