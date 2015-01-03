<!DOCTYPE html>
<html>
<head>
    <title>TSJH.nl - Tennisschool Jeroen van den Heuvel</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <!--style-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>

    {{ HTML::style('style/reset.css') }}
    {{ HTML::style('style/superfish.css') }}
    {{ HTML::style('style/fancybox/jquery.fancybox.css') }}
    {{ HTML::style('style/jquery.qtip.css') }}
    {{ HTML::style('style/jquery-ui-1.9.2.custom.css') }}
    {{ HTML::style('style/style.css') }}
    {{ HTML::style('style/responsive.css') }}


    <!--js-->
    {{ HTML::script('js/jquery-1.8.3.min.js') }}
    {{ HTML::script('js/jquery.ba-bbq.min.js') }}
    {{ HTML::script('js/jquery-ui-1.9.2.custom.min.js') }}
    {{ HTML::script('js/jquery.easing.1.3.js') }}
    {{ HTML::script('js/jquery.carouFredSel-5.6.4-packed.js') }}
    {{ HTML::script('js/jquery.timeago.js') }}
    {{ HTML::script('js/jquery.hint.js') }}
    {{ HTML::script('js/jquery.isotope.min.js') }}
    {{ HTML::script('js/jquery.isotope.masonry.js') }}
    {{ HTML::script('js/jquery.fancybox-1.3.4.pack.js') }}
    {{ HTML::script('js/jquery.qtip.min.js') }}
    {{ HTML::script('js/jquery.blockUI.js') }}
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    {{ HTML::script('js/main.js') }}

    <link rel="stylesheet" type="text/css" href="http://www.hwcc.nl/beheer/css/colorbox/colorbox.css">
    <script src="http://www.hwcc.nl/beheer/js/jquery.js"></script>
    <script src="http://www.hwcc.nl/beheer/js/jquery.colorbox.js"></script>
    <script>$(document).ready(function(){ $("a[rel='lightbox']").colorbox({maxWidth: '90%', maxHeight: '90%', scalePhotos: true}); });</script>
</head>
<body>
<div class="site_container boxed">
    <div class="header_container" style="height:98px;">
        <div class="header clearfix">
            <div class="header_left" style="float:left;margin-top:-40px;margin-left:-20px; margin-bottom:-50px;">
                <a href="{{ action('home') }}" title="TSJH">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" style="height:80px; margin-top: 10px;" />
                    <span class="logo"></span>
                </a>
            </div>
            <ul class="sf-menu header_right">
                <li class="{{ HTML::check_active('/') }}">
                    <a href="{{ action('home') }}">
                        HOME
                    </a>
                </li>
                <li class="{{ HTML::check_active('trainingen') }}">
                    <a href="{{ action('trainingen') }}">
                        TRAININGEN
                    </a>
                </li>
                <li class="{{ HTML::check_active('events') }}">
                    <a href="{{ action('events') }}">
                        EVENTS
                    </a>
                </li>
                <li class="{{ HTML::check_active('consultancy') }}">
                    <a href="{{ action('consultancy') }}">
                        CONSULTANCY
                    </a>
                </li>
                <li class="{{ HTML::check_active('inschrijven') }}">
                    <a href="{{ action('inschrijven') }}">
                        INSCHRIJVEN
                    </a>
                </li>
                <li class="{{ HTML::check_active('contact') }}">
                    <a href="{{ action('contact') }}">
                        CONTACT
                    </a>
                </li>
            </ul>
            <div class="mobile_menu">
                <select>
                    <option value="{{ action('home') }}" selected='selected'>HOME</option>
                    <option value="{{ action('trainingen') }}">TRAININGEN</option>
                    <option value="{{ action('events') }}">EVENTS</option>
                    <option value="{{ action('consultancy') }}">CONSULTANCY</option>
                    <option value="{{ action('inschrijven') }}">INSCHRIJVEN</option>
                    <option value="{{ action('contact') }}">CONTACT</option>
                </select>
            </div>				</div>
    </div>
