@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Voorwaarden</h1>
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
                                Lesvoorwaarden
                            </h2>

                            <fieldset class="left">
                                <p>
                                    Groepslessen gaan, bij afzegging van een gedeelte van de groep altijd door.<br><br>
                                    De afzeggers hebben geen recht op inhalen en/of vergoeding van de betreffende les.<br><br>
                                    Annulering van de cursus kan alleen schriftelijk en tot maximaal 3 weken voor aanvang van de cursus.<br><br>
                                    Na ontvangst van bevestiging van indeling, dient in alle gevallen het lesgeld te worden voldaan.<br><br>
                                    Door inschrijving verbindt u zich aan de gehele cursus.Indien de cursist de 18 weken zomerseizoen jeugd ALTC Abcoude,18 weken senioren zomerseizoen ALTC Abcoude/,16 weken zomerseizoen TC Voordaan/HLTC Melkhuisje en 20 weken winterseizoen binnen afbreekt ,blijft de cursist het gehele bedrag verschuldigd.<br><br>
                                    Gehele of gedeeltelijke restitutie van het lesgeld zal in alle andere gevallen alleen plaats vinden als wij voor u een vervanger voor de door u gereserveerde cursus plaats kunnen vinden.<br><br>
                                    Het volledige cursusgeld dient, voor aanvang van de 4e les te zijn overgemaakt.<br><br>
                                    Een lesuur duurt 60 minuten inclusief 10 minuten pauze voor de trainer/trainster.<br><br>
                                    Het volgen van een cursus geschiedt op eigen risico.<br><br>
                                    De tennisschool/tennisvereniging behoudt het recht om bij onvolledige groepen het aantal lessen te verlagen.<br><br>
                                    De tennisschool/tennisvereniging behoudt het recht om bij onvoldoende inschrijvingen een onderdeel/aktiviteit te schrappen.<br><br>
                                    Privelessen dienen 24 uur van tevoren geannuleerd te worden, bij latere afmelding dient u het lesgeld te voldoen.<br><br>
                                    Tijdens het zomerseizoen geldt de regel: bij 2 regenlessen wordt er 1 les ingehaald (max. 2 lessen). Inhaallessen die verregend zijn worden niet ingehaald.<br><br>
                                    Tijdens het winterseizoen voor de buiten lessen ALTC Abcoude geldt de regel: er wordt alleen betaald voor de gegeven  lessen.We streven naar 13 lessen.<br><br>
                                    Feestdagen worden ingehaald.<br><br>
                                    <a href="{{ action('inschrijven') }}">Terug naar inschrijvingen</a>
                                </p>
                            </fieldset>

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