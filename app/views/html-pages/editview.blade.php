@include('html-pages.partials._header')
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea"
    });
</script>

<div class="page relative">
    <div class="page_layout page_margin_top clearfix" style="margin-top:0px">
        <div class="page_header clearfix" style="background: url({{ asset("img/bg_top.jpg") }});padding-top: 30px;margin-bottom: 30px;">
        <div class="page_header_left">
            <h1 class="page_title" style="margin-left: 20px; color:white;">Beheer</h1>
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
                                Content editen
                            </h2>

                            @if(isset($done))
                            <h3 style="color:red">
                                Opgeslagen!
                            </h3>
                            @endif

                            {{ Form::open(['class' => 'contact_form']) }}

                            @include('html-pages.partials._errors')

                            <textarea style="width:1000px;" name="content" id="content">
                                {{ $body }}
                            </textarea>

                            <div style="clear:both;"></div>

                            {{ Form::button('Opslaan', ['class' => 'more blue icon_small_arrow margin_right_white','style' => 'margin-top:20px;margin-bottom:40px;', 'type' => 'submit']) }}

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