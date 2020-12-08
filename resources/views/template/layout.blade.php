<!DOCTYPE html>
<!--
Template Name: Grace Church
Version: 1.0.0
Author:
Website:
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>@yield('titolo')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description"  content="Grace Church"/>
    <meta name="keywords" content="Grace Church, Marriage, Event, Temple, function" />
    <meta name="author"  content=""/>
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/layers.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status"><img src="{{asset('images/preloader.gif')}}" id="preloader_image" alt="">
    </div>
</div>
<!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Top Scroll End -->

@include('cookieConsent::index')

<!-- Header Wrapper Start -->
<div section-scroll='0' class="gc_scroll_wrap">
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                    <div class="gc_header_wrapper">
                        <div class="gc_logo">
                            <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Logo" title="Grace Church" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-area hidden-menu-bar stick" id="sticker">
                        <!-- mainmenu start -->
                        <div class="mainmenu">
                            <ul>
                                <li class="has-mega gc_main_navigation"><a href="{{route('index')}}" class="gc_main_navigation">  Home</a>
                                    <!-- mega menu start -->
                                    {{--<ul>
                                        <li class="parent"><a href="index.html">Home1</a></li>
                                        <li class="parent"><a href="index2.html">Home2</a></li>
                                        <li class="parent"><a href="index3.html">Home3</a></li>
                                    </ul>--}}
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Storia</a>
                                    <!-- mega menu start -->
                                    {{--<ul>
                                        <li class="parent"><a href="about.html">About</a></li>
                                        <li class="parent"><a href="causes.html">Causes</a></li>
                                        <li class="parent"><a href="causes_single.html">Causes Single</a></li>

                                    </ul>--}}
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  eventi</a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="upcoming.html">eventi in zona</a></li>
                                        <li class="parent"><a href="event_single.html">eventi fuori zona</a></li>

                                    </ul>
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  sermoni</a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="sermons.html">Ultimi sermoni</a></li>
                                        <li class="parent"><a href="sermons_single.html">Cerca sermone</a></li>

                                    </ul>
                                </li>
                                <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Galleria</a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="gallery_II.html">Galleria-II</a></li>
                                        <li class="parent"><a href="gallery_III.html">Galleria-III</a></li>
                                        <li class="parent"><a href="gallery_IV.html">Galleria-IV</a></li>

                                    </ul>
                                </li>
                                {{--<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Blog</a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="blog_categories.html">Blog-Category</a></li>
                                        <li class="parent"><a href="blog_single.html">Blog-Single</a></li>

                                    </ul>
                                </li>--}}
                                <li class="gc_main_navigation parent"><a href="{{route('contatti')}}" class="gc_main_navigation">Contatti</a></li>
                            </ul>
                        </div>
                        <!-- mainmenu end -->
                        <!-- mobile menu area start -->
                        <header class="mobail_menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="gc_logo">
                                            <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="Logo" title="Grace Church"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="cd-dropdown-wrapper">
                                            <a class="house_toggle" href="#0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00468c"/></g></g></svg>
                                            </a>
                                            <nav class="cd-dropdown">
                                                <h2><a href="#">Grace <span>Church</span></a></h2>
                                                <a href="#0" class="cd-close">Close</a>
                                                <ul class="cd-dropdown-content">
                                                    <li>
                                                        <form class="cd-search">
                                                            <input type="search" placeholder="Search...">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('index')}}">Home</a>

                                                        {{--<ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="index.html">Home1</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="index2.html">Home2</a>
                                                            </li> <!-- .has-children -->
                                                            <li>
                                                                <a href="index3.html">Home3</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->--}}
                                                    </li> <!-- .has-children -->


                                                    <li>
                                                        <a href="#">Storia</a>

                                                        {{--<ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="about.html">About</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="causes.html">Causes</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="causes_single.html">Causes-Single</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->--}}
                                                    </li> <!-- .has-children -->
                                                    <li class="has-children">
                                                        <a href="#">eventi </a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="upcoming.html">eventi in zona</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="event_single.html">eventi fuori zona</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->
                                                    </li> <!-- .has-children -->

                                                    <li class="has-children">
                                                        <a href="#">sermoni </a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="sermons.html">Ultimi sermoni</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="sermons_single.html">Cerca sermone</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->
                                                    </li> <!-- .has-children -->
                                                    <li class="has-children">
                                                        <a href="#">Galleria</a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="gallery_II.html">Galleria-II</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="gallery_III.html">Galleria-III</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="gallery_IV.html">Galleria-IV</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->
                                                    </li> <!-- .has-children -->
                                                    {{--<li class="has-children">
                                                        <a href="#">Blog</a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="blog_categories.html">Blog-Category</a>
                                                            </li> <!-- .has-children -->

                                                            <li>
                                                                <a href="blog_single.html">Blog-Single</a>
                                                            </li> <!-- .has-children -->

                                                        </ul> <!-- .cd-secondary-dropdown -->
                                                    </li> <!-- .has-children -->--}}
                                                    <li>
                                                        <a href="{{route('contatti')}}">Contatti</a>
                                                    </li>

                                                </ul> <!-- .cd-dropdown-content -->



                                            </nav> <!-- .cd-dropdown -->

                                        </div>
                                    </div>
                                </div>
                            </div><!-- .cd-dropdown-wrapper -->
                        </header>
                    </div>
                </div>
                <!-- mobile menu area end -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="gc_right_menu">
                        <ul>
                            <li><a href="#" class="gc_btn">Donazione</a></li>
                            {{--<li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 58.995 58.995" style="enable-background:new 0 0 58.995 58.995;" xml:space="preserve"><path id="share" d="M39.927,41.929c-0.524,0.524-0.975,1.1-1.365,1.709l-17.28-10.489c0.457-1.144,0.716-2.388,0.716-3.693  c0-1.305-0.259-2.549-0.715-3.693l17.284-10.409C40.342,18.142,43.454,20,46.998,20c5.514,0,10-4.486,10-10s-4.486-10-10-10  s-10,4.486-10,10c0,1.256,0.243,2.454,0.667,3.562L20.358,23.985c-1.788-2.724-4.866-4.529-8.361-4.529c-5.514,0-10,4.486-10,10  s4.486,10,10,10c3.495,0,6.572-1.805,8.36-4.529L37.661,45.43c-0.43,1.126-0.664,2.329-0.664,3.57c0,2.671,1.04,5.183,2.929,7.071  c1.949,1.949,4.51,2.924,7.071,2.924s5.122-0.975,7.071-2.924c1.889-1.889,2.929-4.4,2.929-7.071s-1.04-5.183-2.929-7.071  C50.169,38.029,43.826,38.029,39.927,41.929z M46.998,2c4.411,0,8,3.589,8,8s-3.589,8-8,8s-8-3.589-8-8S42.586,2,46.998,2z   M11.998,37.456c-4.411,0-8-3.589-8-8s3.589-8,8-8s8,3.589,8,8S16.409,37.456,11.998,37.456z M52.654,54.657  c-3.119,3.119-8.194,3.119-11.313,0c-1.511-1.511-2.343-3.521-2.343-5.657s0.832-4.146,2.343-5.657  c1.56-1.56,3.608-2.339,5.657-2.339s4.097,0.779,5.657,2.339c1.511,1.511,2.343,3.521,2.343,5.657S54.166,53.146,52.654,54.657z" fill="#00468c"/></svg>
                                <div class="gc_share_box">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </li>--}}
                            {{--<li id="search_button">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#00468c"/></g></svg>
                            </li>
                            <li>
                                <div id="search_open" class="gc_search_box">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </li>--}}
                            <li style="font-size:30px;cursor:pointer" onclick="openNav()">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_4" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="512px" height="512px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#00468c"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#00468c"/></g></g></svg>
                            </li>
                        </ul>
                        <div id="mySidenav" class="sidenav gc_single_index_menu">
                            <ul>
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <li><a href="0">Home</a></li>
                                <li><a href="1">Causes</a></li>
                                <li><a href="2">About</a></li>
                                <li><a href="3">Eventi</a></li>
                                <li><a href="4">Galleria</a></li>
                                <li><a href="5">Sermoni</a></li>
                                {{--<li><a href="6">Blog</a></li>--}}
                                <li><a href="7">Ceremon</a></li>
                                <li><a href="8">Contatti</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->

    @yield('headercontent')

</div>

@yield('content')


<!-- GC map Wrapper Start -->
<div section-scroll='8' class="gc_scroll_wrap">
    {{--<div class="gc_map_main_wrapper">
        <div class="container">
            <div class="gc_get_box_wrapper">
                <div class="gc_get_heading_icon">
                    <img src="images/header/map_icon.png" alt="map_icon"/>
                </div>
                <div class="gc_get_heading">
                    <h1>Get In Touch</h1>
                </div>
                <div class="gc_get_pera">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version  of Lorem Ipsum.<a href="#">Contact Us</a></p>
                </div>
                <div class="gc_map_add_wrapper gc_map_add_wrapper1">
                    <div class="gc_map_location_icon_wrapper">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="gc_map_location_icon_cont_wrapper">
                        <h3>121 King Street, Melbourne, Australia
                            Victoria 3000</h3>
                    </div>
                </div>
                <div class="gc_map_add_wrapper gc_map_add_wrapper2">
                    <div class="gc_map_location_icon_wrapper">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="gc_map_location_icon_cont_wrapper">
                        <h3> +61 3 8376 6284, +61 3 2555 682 458</h3>
                    </div>
                </div>
                <div class="gc_map_add_wrapper gc_map_add_wrapper3">
                    <div class="gc_map_location_icon_wrapper">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="gc_map_location_icon_cont_wrapper">
                        <h3> <a href="#">godlove@gracechurch.com</a></h3>
                    </div>
                </div>
            </div>
            <div class="gc_right_map_main_wrapper">
                <div id="map" style="width:100%; float:left; height:450px;"></div>
                <div class="gc_map_label_wrapper">
                    <p><a href="#">Go to Map</a></p>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- GC map Wrapper End -->
    <!-- GC footer Wrapper Start -->
    <div class="gc_footer_main_wrapper">
        <div class="gc_footer_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gc_footer_logo_wrapper">
                        <div class="gc_footer_logo">
                            <img src="{{asset('images/footer_logo.png')}}" class="img-responsive" alt="footer logo"/>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="gc_footer_social_icon_wrapper">
                        <div class="gc_footer_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"> Google Plus</i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-square"></i> Pintrest</a></li>
                                <li><a href="#"><i class="fa fa-instagram"> Instagram</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>--}}
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="gc_footer_news_wrapper">
                        <div class="gc_footer_news">
                            <h3>Newsletter</h3>
                            <p>Per essere informati sulle ultime notizie, eventi, programmi settimanali</p>
                        </div>
                        <div class="gc_footer_news_email">
                            <h3>Iscriviti alla Newsletter</h3>
                            <input type="email" placeholder="Email"><i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="gc_footer_letestnews_wrapper">
                        <div class="gc_footer_news">
                            <h3>Ultime notizie</h3>
                        </div>
                        <div class="gc_footer_ln_main_wrapper">
                            <div class="gc_footer_ln_img_wrapper">
                                <img src="{{asset('images/footer_news1.jpg')}}" class="img-responsive" alt="ln_img"/>
                            </div>
                            <div class="gc_footer_ln_cont_wrapper">
                                <h4>Signore delle nostre vite e nostra salvezza</h4>
                                <p>12 maggio 2018</p>
                            </div>
                        </div>
                        <div class="gc_footer_ln_main_wrapper2">
                            <div class="gc_footer_ln_img_wrapper">
                                <img src="{{asset('images/footer_news2.jpg')}}" class="img-responsive" alt="ln_img"/>
                            </div>
                            <div class="gc_footer_ln_cont_wrapper">
                                <h4>Signore delle nostre vite e nostra salvezza</h4>
                                <p>12 maggio 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="gc_footer_ul_wrapper">
                        <div class="gc_footer_news">
                            <h3>Links Utili</h3>
                        </div>
                        <div class="gc_footer_ul_main_wrapper">
                            <div class="gc_footer_ul_wrapper">
                                <ul>
                                    <li><i class="fa fa-hand-o-right"></i> <a href="#">Chi siamo?</a></li>
                                    <li><i class="fa fa-hand-o-right"></i> <a href="#">Sermoni</a></li>
                                    <li><i class="fa fa-hand-o-right"></i> <a href="#">Eventi</a></li>
                                    <li><i class="fa fa-hand-o-right"></i> <a href="#">Donazioni</a></li>
                                    <li><i class="fa fa-hand-o-right"></i> <a href="#">Volontariato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="gc_footer_insta_wrapper">
                        <div class="gc_footer_news">
                            <h3>Dove Siamo</h3>
                        </div>
                        <div class="gc_footer_insta_main_wrapper">
                            <div class="gc_footer_insta_wrapper">
                                <div class="row">
                                    <div class="gc_footer_ln_cont_wrapper">
                                        <h4>Via Roma, 215</h4>
                                        <h4>50100 - Arezzo</h4>
                                        <h4>Italy</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="gc_bottom_footer_main_wrapper">
    <div class="container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="gc_bottom_footer_copy_wrapper">
                <p>Copyright © 2017 <a href="#">Chiesa di San Francesco</a>. All rights reserved. {{--Design by <a href="#">Webstrot</a>--}}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="gc_bottom_footer_right_wrapper">
                <ul>
                    <li><a href="#">PRIVACY POLICY</a></li>
                    <li><a href="#">TERMS & CONDITIONS</a></li>
                    <li><a href="#">COPYRIGHT  POLICY</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- GC footer Wrapper End -->
<!--main js file start-->
<script type="text/javascript" src="{{asset('js/jquery_min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.menu-aim.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.shuffle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.addon.snow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!--main js file end-->
<script>
    function initMap() {
        var uluru = {lat: -36.742775, lng:  174.731559};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            scrollwheel: false,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&callback=initMap">
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>