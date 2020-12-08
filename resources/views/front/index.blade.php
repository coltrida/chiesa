@extends('template.layout')

@section('titolo')
    Chiesa di San Francesco
@endsection

@section('headercontent')
    <!-- GC Slider Wrapper Start -->
    @include('front.partials.slider')
    <!-- GC Slider Wrapper End -->

    <!-- Eventi in arrivo e Streaming Start -->
    <div class="gc_event_main_wrapper">
        <div class="container">

            <!-- Eventi in arrivo Start -->
            @include('front.partials.eventoinarrivo')
            <!-- Eventi in arrivo End -->

            <!-- Streaming Start -->
            @include('front.partials.streaming')
            <!-- Streaming End -->

        </div>
    </div>
    <!-- Eventi in arrivo e Streaming End -->
@endsection

@section('content')
    <!-- Donazioni e Carità Start -->
    @include('front.partials.donazioniecarita')
    <!-- Donazioni e Carità End -->


    <div section-scroll='2' class="gc_scroll_wrap">
        <!-- La nostra storia Start -->
        @include('front.partials.lanostrastoria')
        <!-- La nostra storia End -->

        <!-- Counter Start -->
        @include('front.partials.counter')
        <!-- Counter  End -->
    </div>



    <div section-scroll='3' class="gc_scroll_wrap">
        <!-- Prossimi Eventi Start -->
        @include('front.partials.prossimieventi')
        <!-- Prossimi Eventi End -->

        <!-- Gesudisse Start-->
        @include('front.partials.gesudisse')
        <!-- Gesudisse End-->
    </div>
    <!-- GC testi_slider Wrapper End -->
    <!-- GC filter Wrapper Start -->
    {{--<div section-scroll='4' class="gc_scroll_wrap">
        <div class="gc_fliter_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_filter_heading_wrapper">
                            <div class="gc_filter_heading">
                                <h2>Discover the church</h2>
                                <h1>Grace Church Photo Gallery</h1>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-area ptb-100">
                        <div class="container">
                            <div class="portfolio-filter clearfix text-center">
                                <ul class="list-inline" id="filter">
                                    <li><a class="active" data-group="all">All</a></li>
                                    <li><a data-group="business">Christmas</a></li>
                                    <li><a data-group="website"> Holy Week</a></li>
                                    <li><a data-group="logo"> Church </a></li>
                                    <li><a data-group="business"> Event </a></li>
                                    <li><a data-group="website"> Pastors </a></li>
                                </ul>
                            </div>
                            <div class="row three-column">
                                <div id="gridWrapper" class="clearfix">
                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "website", "logo"]'>
                                        <div class="portfolio-thumb">

                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img1.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img1.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>

                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img2.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img2.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>

                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "photoshop"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img3.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img3.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>

                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "website", "business"]'>
                                        <div class="portfolio-thumb">

                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img4.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img1.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>

                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img5.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img2.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>

                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <img src="images/content/gallery/filter_img6.jpg" class="zoom image img-responsive" alt="service_img"/>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/content/filter_img3.jpg"><i class="fa fa-plus"></i></a></div>
                                                </div>
                                            </div>
                                        </div><!-- /.portfolio-thumb -->
                                    </div>

                                </div><!--/#gridWrapper-->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="gc_filter_btn">
                                        <ul>
                                            <li><a href="#">View All</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!--/.portfolio-area-->
                </div>
            </div>
        </div>
    </div>--}}
    <!-- GC filter Wrapper End -->
    <!-- GC sermons Wrapper Start -->
    {{--<div section-scroll='5' class="gc_scroll_wrap">
        <div class="gc_sermons_main_wrapper">
            <div class="gc_sermons_img_overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_serm_heading_wrapper">
                            <div class="gc_serm_heading">
                                <h2>Watch and Listen</h2>
                                <h1>Our Latest Sermons</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gc_serm_slider_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_serm_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="gc_serm_item1_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img1.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item2_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img2.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item3_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img3.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item4_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img4.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item5_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_serm_item1_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img1.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item2_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img2.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item3_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img3.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item4_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img4.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item5_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_serm_item1_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img1.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item2_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img2.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item3_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img3.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item4_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="{{asset('images/serm_img4.jpg')}}" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gc_serm_item5_width">
                                        <div class="gc_serm_cont_main_wrapper">
                                            <h5>- May 10 - 11, 2017</h5>
                                            <h6>Spritual Growth</h6>
                                            <h4>Steps for Spiritual Renewal</h4>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. This is Phoshop's version.  <a href="#">Read More</a></p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="#"><i class="fa fa-cloud-download"></i></a></li>
                                                <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            </ul>
                                            <div class="gc_serm_img_wrapper">
                                                <img src="images/content/serm_img5.jpg" class="img-responsive" alt="serm_img"/>
                                                <h2>- by <span>Clinith Luis</span></h2>
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
    </div>--}}
    <!-- GC sermons Wrapper End -->
    <!-- GC blogs Wrapper Start -->
    {{--<div section-scroll='6' class="gc_scroll_wrap">
        <div class="gc_blogs_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_blog_heading_wrapper">
                            <div class="gc_blog_heading">
                                <h2>Ultime Notizie</h2>
                                <h1>Latest From Blog</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_blog_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img1.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Childrens Adoption</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img2.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Lord of our life and our salution</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img1.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Childrens Adoption</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img2.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Lord of our life and our salution</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img1.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Childrens Adoption</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="gc_blog_post_wrapper">
                                                <div class="gc_blog_img_wrapper">
                                                    <img src="images/content/blog_img2.jpg" class="zoom image img-responsive" alt="blog_img"/>
                                                </div>
                                                <div class="gc_blog_date_main_sec">
                                                    <div class="gc_blog_date_wrapper">
                                                        <div class="gc_blog_date">
                                                            <p>15 <br><span>May</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="gc_blog_date_cont_wrapper">
                                                        <h4>Lord of our life and our salution</h4>
                                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean itudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris...</p>
                                                        <h5><a href="#">Read More</a></h5>
                                                    </div>
                                                    <div class="gc_bottom_bog_sec_wrapper">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-user"></i> - by Jane Smith</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> 04 Comm.</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> in news, prayer</a></li>
                                                        </ul>
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
            </div>
        </div>
        <!-- GC blogs Wrapper End -->
        <!-- GC testi Wrapper Start -->
        <div class="gc_client_main_wrapper">
            <div class="gc_client_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gc_client_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="gc_client_slide_main_wrapper">
                                        <div class="gc_client_cont_wrapper">
                                            <p>“ <span>Grace Community</span> Church provides tools, teams, and times to help individuals – and the church family as a whole – pray.
                                                Prayer is vitally important to your relationship with <span>God</span>. We would love to pray for you, a friend, or a family member.
                                                We believe that actions fueled and guided by the <span>Holy Spirit</span> in accordance to God’s.”</p>
                                        </div>
                                        <div class="gc_client_img_nd_social_wrapper">
                                            <div class="gc_client_img_wrapper">
                                                <img src="images/content/client_img.jpg" class="img-responsive" alt="client_img"/>
                                            </div>
                                            <div class="gc_client_social_wrapper">
                                                <p>- by <span>Merry Jain</span> <span>(Church Memeber)</span></p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_client_slide_main_wrapper">
                                        <div class="gc_client_cont_wrapper">
                                            <p>“ <span>Grace Community</span> Church provides tools, teams, and times to help individuals – and the church family as a whole – pray.
                                                Prayer is vitally important to your relationship with <span>God</span>. We would love to pray for you, a friend, or a family member.
                                                We believe that actions fueled and guided by the <span>Holy Spirit</span> in accordance to God’s.”</p>
                                        </div>
                                        <div class="gc_client_img_nd_social_wrapper">
                                            <div class="gc_client_img_wrapper">
                                                <img src="images/content/client_img.jpg" class="img-responsive" alt="client_img"/>
                                            </div>
                                            <div class="gc_client_social_wrapper">
                                                <p>- by <span>Maria Doe</span> <span>(Church Memeber)</span></p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_client_slide_main_wrapper">
                                        <div class="gc_client_cont_wrapper">
                                            <p>“ <span>Grace Community</span> Church provides tools, teams, and times to help individuals – and the church family as a whole – pray.
                                                Prayer is vitally important to your relationship with <span>God</span>. We would love to pray for you, a friend, or a family member.
                                                We believe that actions fueled and guided by the <span>Holy Spirit</span> in accordance to God’s.”</p>
                                        </div>
                                        <div class="gc_client_img_nd_social_wrapper">
                                            <div class="gc_client_img_wrapper">
                                                <img src="images/content/client_img.jpg" class="img-responsive" alt="client_img"/>
                                            </div>
                                            <div class="gc_client_social_wrapper">
                                                <p>- by <span>Merry Jain</span> <span>(Church Memeber)</span></p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
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
    </div>--}}
    <!-- GC testi Wrapper End -->
    <!-- GC ceremony Wrapper Start -->
    <div section-scroll='7' class="gc_scroll_wrap">
        <div class="gc_ceremony_main_wrapper">
            <div class="container">
                <div class="row">

                    <!-- Cosa facciamo Start -->
                    @include('front.partials.cosafacciamo')
                    <!-- Cosa facciamo End -->

                    <!-- Perchè noi Start -->
                    @include('front.partials.perchenoi')
                    <!-- Perchè noi End -->

                    <!-- matrimoni Start -->
                    @include('front.partials.matrimoni')
                    <!-- matrimoni End -->

                    <!-- volontari Start -->
                    @include('front.partials.volontari')
                    <!-- volontari End -->

                </div>
            </div>
        </div>
        <!-- GC ceremony Wrapper End -->

        <!-- take a tour Start -->
        {{--@include('front.partials.takeatour')--}}
        <!-- take a tour End -->

        <!-- GC partner Wrapper Start -->
        {{--<div class="gc_partner_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                        <div class="gc_partner_heading_wrapper">
                            <div class="gc_partner_heading">
                                <h2>Sponsors</h2>
                                <h1>Our Top Partners</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                        <div class="gc_partner_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="gc_prt1_img_wrapper">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo04.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo05.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt1_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper hidden-xs">
                                        <img src="images/content/logo07.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper hidden-xs">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_prt1_img_wrapper">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo04.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo05.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt1_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper hidden-xs">
                                        <img src="images/content/logo07.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper hidden-xs">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gc_prt1_img_wrapper">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo04.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo05.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt1_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt2_img_wrapper hidden-xs">
                                        <img src="images/content/logo07.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt3_img_wrapper hidden-xs">
                                        <img src="images/content/logo01.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt4_img_wrapper hidden-xs">
                                        <img src="images/content/logo03.png" alt="partner_img"/>
                                    </div>
                                    <div class="gc_prt5_img_wrapper hidden-sm hidden-xs">
                                        <img src="images/content/logo02.png" alt="partner_img"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
    <!-- GC partner Wrapper End -->
@endsection