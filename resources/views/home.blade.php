@extends('layouts.app')

@section('content')

<div class="clearfix"></div>
        <!-- STAR HEADER SEARCH -->
        <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                     
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                     <form action="{{route('result')}}" method="GET" style="width:100%">  
                                                        <div class="rld-single-input" >
                                                            <input type="text" name="query" placeholder=" Enter a City or ZIP code" style="width:80%" >
                                                        </div>

                                                       
                                                      </form>
                                                      
                                                    </div>

                                                </div>
                                            </div>
                                     
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER SEARCH -->

        <!-- START SECTION PROPERTIES FOR SALE -->
        <section class="featured portfolio bg-white-3">
            <div class="container">
                <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Recently Added</h3>
                        <h2>Properties</h2>
                    </div>
                </div>

            <div class="row portfolio-items">  
                @if(count($listings) > 0)	
	                                @foreach($listings as $listing)  
              
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property/{{$listing->id}}" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ {{$listing->price}}</span>
                                        <span>For {{$listing->status}}</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">Luxury {{$listing->property_type}}  <i>{{$listing->city}}, {{$listing->state}}</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>{{$listing->size}}</span></li>
                                            <li>Living room <span>{{$listing->livingroom}}</span></li>
                                            <li>Beds <span>{{$listing->bedroom}}</span></li>
                                            <li>Baths <span>{{$listing->bathroom}}</span></li>
                                        </ul>
                                    </div>
                                    <img src="/rentallisting/storage/app/public/{{$listing->image}}" alt="" style="height:250px">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
 
                </div>
                <div class="bg-all">
                    <a href="{{route('listing')}}" class="btn btn-outline-light">View All</a>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->
        
        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-2">
            <div class="container">
               <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Why</h3>
                        <h2>Choose Us</h2>
                    </div>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="assets/images/icons/icon-4.svg" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center"></p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="assets/images/icons/icon-5.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center"></p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="assets/images/icons/icon-6.svg" alt="">
                                <h3>Financing made easy</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center"></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION PROPERTIES FOR RENT -->
        <section class="featured portfolio bg-white-3">
            <div class="container">
                <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Recently Added</h3>
                        <h2>Apartments</h2>
                    </div>
                </div>
                <div class="row portfolio-items">

                @if(count($listingsapartment) > 0)	
	                                @foreach($listingsapartment as $listing)  
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property/{{$listing->id}}" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">${{$listing->price}}</span>
                                        <span class="rent">For {{$listing->status}}</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">Luxury {{$listing->property_type}}  <i>{{$listing->city}}, {{$listing->state}}</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>{{$listing->size}}</span></li>
                                            <li>Living Room <span>{{$listing->livingroom}}</span></li>
                                            <li>Bed Room <span>{{$listing->bedroom}}</span></li>
                                            <li>Bathroom <span>{{$listing->bathroom}}</span></li>
                                        </ul>
                                    </div>
                                    <img src="/rentallisting/storage/app/public/{{$listing->image}}" alt="" style="height:250px">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach 
                @endif

                </div>
                <div class="bg-all">
                    <a href="{{route('all-apartments')}}" class="btn btn-outline-light">View All</a>
                </div>

            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR RENT -->

        <!-- START SECTION INFO-HELP -->
        <section class="info-help">
            <div class="container">
                <div class="row info-head">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-text" data-aos="fade-right">
                            <h3>Featured Properties.</h3>
                            <p>We Help you find the best places and offer near you. Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
                            <div class="inf-btn pro">
                                <a href="{{route('listing')}}" class="btn btn-pro btn-secondary btn-lg">Explore</a>
                            </div>
                        </div>
                    </div>

                    
                    @if(count($homefeaturedlistings) > 0)	
	                                       @foreach($homefeaturedlistings as $listings) 
                    <div class="featured portfolio home18 item col-lg-4 col-md-6 landscapes sale">
                        <div class="project-single specials" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For {{$listings->status}}</div>
                                        <div class="homes-price">${{$listings->price }}</div>
                                        <img src="/rentallisting/storage/app/public/{{$listings->image}}" alt="home-1" class="img-responsive" style="height:250px">
                                    </a>
                                </div>

                                <div class="button-effect">
                                    <a href="single-property/{{$listing->id}}" class="btn"><i class="fa fa-link"></i></a>
                                   
                                </div>

                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html"> Luxury {{$listings->property_type}} </a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>{{$listings->address}}, <br>
                                         {{$listings->zip_code}} {{$listings->city}},{{$listings->state}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-0">
                                    <li>
                                        <span>Bedrooms : {{$listings->bedroom}}</span>
                                    </li>
                                    <li>
                                        <span>Bathrooms : {{$listings->bathroom}}</span>
                                    </li>
                                    <li>
                                        <span>{{$listings->size}}</span>
                                    </li>
                                    <li>
                                        <span>Garages : {{$listings->garage}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif


           


                </div>
            </div>
        </section>
        <!-- END SECTION INFO-HELP -->

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white-2">
            <div class="container">
               <div class="row">
                    <div class="section-title col-md-5">
                        <h3>Articles &amp;</h3>
                        <h2>Tips</h2>
                    </div>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="assets/images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Explore The World</h3></a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p></p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="assets/images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="assets/images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Find Good Places</h3></a>
                                    <div class="dates">
                                        <span class="date">May 20, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p></p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="assets/images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="assets/images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>All Places In Town</h3></a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p></p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="assets/images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->

        <!-- END SECTION PARTNERS -->
       












@endsection