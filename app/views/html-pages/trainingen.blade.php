@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
            <div class="page_header_left">
                <h1 class="page_title" style="margin-left: 20px; color:white;">Trainingen</h1>
            </div>
            <div class="page_header_right">
            </div>
        </div>
        <div class="clearfix">
            <div class="gallery_item_details_list clearfix page_margin_top" >
                <div class="gallery_item_details clearfix">
                    <div class="columns no_width">
                        <div class="column_left">
                            <div class="details_box">
                                <h2>
                                    Jeugd tennislessen- en trainingen							</h2>
                                <p style="text-align: justify">
                                    Voor les kunnen kinderen meestal vanaf een jaar of 5/6 terecht bij een tennisvereniging. De allerkleinsten beginnen met de cursus "kidstennis". Hier maken de kinderen op de juiste manier kennis met het boeiende en veelzijdige spelletje tennis.<br>Met aangepast spelmateriaal wordt spelenderwijs het balgevoel, het anticipatie- en orientatievermogen verbeterd. Daarna stromen ze door naar de cursussen voor beginners en gevorderden.<br><br>Voor de groepslessen wordt er om praktische redenen op leeftijd en beschikbaarheid ingedeeld. Wij gaan het liefst zo veel mogelijk uit van het niveau en instelling van het kind.
                                </p>

                                <p></p><br>
                                <h2>Senioren tennislessen</h2>
                                   <p style="text-align: justify">
                                    De tennistrainers van Tennisschool Jeroen van den Heuvel vormen een enthousiast team, dat zich kenmerkt door een deskundige en persoonsgebonden aanpak. Wij bieden tenniscursussen voor beginners, gevorderden en competitiespelers aan.
                                    <br><br>
                                       Naast het feit dat de beheersing van een goede techniek van de slagen meer speelplezier geeft vormt juist deze techniek de basis om blessure vrij te kunnen spelen.
                                </p>
                                 <br></div>
                        </div>
                        <div class="column_right" style="padding-top: 15px;">
                            <iframe width="480" height="270" src="//www.youtube.com/embed/PfDMXw2eBRs?modestbranding&showinfo=0" frameborder="0" allowfullscreen></iframe>
                           <br><br>
                            <div class="details_box">
                                <br><br>
                                <h2>Privé les</h2>
                                <p style="text-align: justify">Kiest u voor de voordelen van onverdeelde aandacht dan is privé les de beste optie alleen of met zijn twee-en. We zijn immers niet allemaal hetzelfde en spelen het spel nu eenmaal op een manier, die bij je past met je sterke en met je zwakke punten, die beide aandacht vragen. <br><br>De leraar zal na het intake gesprek met een persoonlijk advies komen waarna het programma wordt opgesteld.</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="columns columns_3 page_margin_top clearfix">
            <ul class="column">
                <li class="item_content clearfix">
                    <div class="text noicon">
                        <h3>
                            Afzeggingen														</h3>
                        Groepslessen gaan, bij afzegging van een gedeelte van de groep altijd door. De afzeggers hebben geen recht op inhalen en/of vergoeding van de betreffende les.</ul>
            <ul class="column">
                <li class="item_content clearfix">
                    <div class="text noicon">
                        <h3>
                            Inschrijven?</h3>
                        <a class="more blue icon_small_arrow margin_right_white" href="{{ action('inschrijven') }}" style="margin-top:20px;" title="Details">Inschrijven voor tennisles</a>
            </ul>
        </div>
    </div>

</div>

@include('html-pages.partials._footer')