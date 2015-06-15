@include('html-pages.partials._header')

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Consultancy @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '6']) }}">(edit)</a>@endif @endif</h1>
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

                            {{ Content::find(6)->body }}

                            </div>
                    </div>
                    <div class="column_right" style="padding-top: 15px;">
                        <img style="width:100%;" src="{{ asset('img/jeroen.jpg') }}">
                        <br><br>
                        <div class="details_box">
                        </div>

                    </div>
                    <div class="column">
                        <br>
                        <h2>Detachering @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '7']) }}">(edit)</a>@endif @endif</h2>
                        {{ Content::find(7)->body }}
                        <br>
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
                        Contact opnemen? @if(Auth::user()) @if(Auth::user()->admin == 1) <a href="{{ action('beheer.edit', ['id' => '8']) }}">(edit)</a>@endif @endif</h3>
                    {{ Content::find(8)->body }}
                    <a class="more blue icon_small_arrow margin_right_white" href="{{ action('contact') }}" style="margin-top:20px;" title="Details">Ga naar de contactpagina</a>
        </ul>
    </div>
</div>

</div>

@include('html-pages.partials._footer')
