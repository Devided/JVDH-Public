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
                                    Jeugd tennislessen- en trainingen @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '2']) }}">(edit)</a>@endif @endif							</h2>
                                {{ Content::find(2)->body }}

                                <p></p><br>
                                <h2>Senioren tennislessen @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '3']) }}">(edit)</a>@endif @endif</h2>
                                   {{ Content::find(3)->body }}
                                 <br></div>
                        </div>
                        <div class="column_right" style="padding-top: 15px;">
                            <iframe width="480" height="270" src="//www.youtube.com/embed/PfDMXw2eBRs?modestbranding&showinfo=0" frameborder="0" allowfullscreen></iframe>
                           <br><br>
                            <div class="details_box">
                                <br><br>
                                <h2>Privé les @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '4']) }}">(edit)</a>@endif @endif</h2>
                                {{ Content::find(4)->body }}

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
                            Afzeggingen	 @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '5']) }}">(edit)</a>@endif @endif													</h3>
                        {{ Content::find(5)->body }}</ul>
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
