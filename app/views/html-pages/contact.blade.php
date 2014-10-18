@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <div class="page_header clearfix">
            <div class="page_header_left">
                <h1 class="page_title">Contact</h1>
            </div>
            <div class="page_header_right">
            </div>
        </div>
        <div class="clearfix">
            <div class="contact_map page_margin_top" id="map">
            </div>
            <script type="text/javascript" charset="utf-8">
                if($("#map").length)
                {
                    //google map
                    var coordinate = new google.maps.LatLng(52.238369, 5.109133);
                    var mapOptions = {
                        scrollwheel: false,
                        zoom: 14,
                        center: coordinate,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        streetViewControl: false,
                        mapTypeControl: true
                    };

                    map = new google.maps.Map(document.getElementById("map"),mapOptions);
                    new google.maps.Marker({
                        position: new google.maps.LatLng(52.238369, 5.109133),
                        map: map,
                        icon: new google.maps.MarkerImage("{{ asset('img/map_pointer.png') }}", new google.maps.Size(38, 45), null, new google.maps.Point(18, 44))
                    });
                }
            </script>
            <div class="page_margin_top clearfix">
                <div class="page_left">
                    <h3 class="box_header">
                        Tennisschool Jeroen van den Heuvel
                    </h3>
                    <ul class="columns no_padding page_margin_top clearfix">
                        <li class="column_left" style="line-height:25px;">
                            <strong><font color="#000000">Adresgegevens</font></strong><br>
                            Klaverkamp 9<br>
                            1241 HX Kortenhoef						</li>
                        <li class="column_right" style="line-height:25px;">
                            <strong>Openingstijden</strong><br/>
                            Zondag - Maandag: <em>Gesloten</em><br/>
                            Dinsdag - Vrijdag: <em>9.30 - 17.30 uur</em><br/>
                            Zaterdag: <em>9.30 - 16.30 uur</em>

                        </li>
                    </ul>

                </div>
                <div class="page_right">
                    <ul class="contact_data page_margin_top">
                        <li class="clearfix">
                            <span class="social_icon phone"></span>
                            <p class="value">
                                Tel: <strong>06 46316952</strong>
                            </p>
                        </li>
                        <li class="clearfix">
                            <span class="social_icon mail"></span>
                            <p class="value">
                                E-mail: <a href="mailto:jeroenvandenheuvel@wxs.nl">jeroenvandenheuvel@wxs.nl</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('html-pages.partials._footer')