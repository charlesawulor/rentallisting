@extends('layouts.app1')

@section('content')
   

   
        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>Luxury {{$listings->property_type}} <span class="mrg-l-5 category-tag">For {{$listings->status}}</span></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{$listings->address}}, <br>
                                                        {{$listings->zip_code}} {{$listings->city}},{{$listings->country}}.
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>${{$listings->price}}</h4>
                                                    <div class="mt-0">
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image2}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image3}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image4}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image5}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="6">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image6}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="7">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image7}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="8">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image8}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="9">
                                            <img src="/rentallisting/storage/app/public/{{$listings->image9}}" class="img-fluid" alt="slider-listing" style="width:100%;height:100%">
                                        </div>

                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image2}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image3}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image4}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image5}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="5" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image6}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="6" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image7}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="7" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image8}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="8" data-target="#listingDetailsSlider">
                                                <img src="/rentallisting/storage/app/public/{{$listings->image9}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3">{{$listings->overview}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">{{$listings->id}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Type:</span>
                                    <span class="det">{{$listings->property_type}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Availability:</span>
                                    <span class="det">For {{$listings->status}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Price:</span>
                                    <span class="det">${{$listings->price}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Livingroom:</span>
                                    <span class="det">{{$listings->livingroom}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bedroom:</span>
                                    <span class="det">{{$listings->bedroom}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det">{{$listings->bathroom}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Garage:</span>
                                    <span class="det">{{$listings->garage}}</span>
                                </li>
                              <!--  <li>
                                    <span class="font-weight-bold mr-1">Year Built:</span>
                                    <span class="det">10/6/2020</span>
                                </li> -->
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">More Details</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                               
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Appliances : {{$listings->appliance}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Pet : {{$listings->pet}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Floor : {{$listings->floor}}</span>
                                </li>
                               
                            </ul>
                        </div>
                      
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>What's Nearby</h5>
                            <div class="property-nearby">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-graduation-cap mr-2"></i><b class="title">Schools</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                   
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">{{$listings->school}}</h6>
                                                        
                                                      
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                        </div>

                                     
                                        
                                        
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-store mr-2"></i><b class="title">Shops & Malls</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                   
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">{{$listings->shop}}</h6>
                                                        
                                                      
                                                    </li>

                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">{{$listings->mall}}</h6>
                                                        
                                                      
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-baby mr-2"></i><b class="title">Parks</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                   
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">{{$listings->park}}</h6>
                                                        
                                                      
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                     <!--   <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                              <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Natural Market</h6>
                                                        <span>(13.20 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Food For Health</h6>
                                                        <span>(13.22 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                        <span>(13.34 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> 
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                        <span>(11.36 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                        <span>(11.87 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                        <span>(11.52 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                     <!--   <div class="property wprt-image-video w50 pro">
                            <h5>Property Video</h5>
                            <img alt="image" src="images/slider/home-slider-4.jpg">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div> -->
                       <!-- <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div> -->
                        <!-- Star Reviews -->
                   
                  
                        <!-- End Add Review -->
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                           
                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Office Hours</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                             
                                                <h4 class="author__title">
                                              <p>  Mon -   10:00 AM to 6:00 PM </p>
                                              <p>   Tue -   10:00 AM to 6:00 PM </p>
                                              <p>   Wed -   10:00 AM to 6:00 PM </p>
                                              <p>  Thu -   10:00 AM to 6:00 PM </p>
                                              <p>   Fri -   10:00 AM to 6:00 PM </p>
                                              <p>   Sat -   10:00 AM to 5:00 PM </p>
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Agent Information</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                             
                                                <h4 class="author__title">{{$listings->agent_name}}</h4>
                                                <p class="author__meta">Agent of Property</p>
                                            </div>
                                            <ul class="author__contact">
                                                
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{$listings->agent_number}}</a></li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{$listings->agent_email}}</a></li>
                                            </ul>
                                    
                                            <div class="pro-details-cart">

                                            <a href="{{ route('single-property.addToCart', ['id'=>$listings->id])}}" class="btn reservation btn-radius theme-btn full-width mrg-top-10" style="color:white;font-size:20px; font-weight:bold;  background-color:blue">Pay ${{$listings->inspection_cost}} to book inspection appointment</a>

                                          </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="main-search-field-2">
                                  
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Feature Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="slick-lancers">

                                            @if(count($featuredlistings) > 0)	
	                                       @foreach($featuredlistings as $listings) 
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{$listings->id}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">${{$listings->price}}</span>
                                                                <span>For {{$listings->status}}</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">Luxury {{$listings->property_type}} <i>{{$listings->city}}, {{$listings->state}}</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>{{$listings->size}}</span></li>
                                                                    <li>Sittingroom <span>{{$listings->sittingroom}}</span></li>
                                                                    <li>Bedroom <span>{{$listings->bedroom}}</span></li>
                                                                    <li>bathroom <span>{{$listings->bathroom}}</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="/rentallisting/storage/app/public/{{$listings->image2}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                         @endforeach 
                                         @endif
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start: Specials offer -->
                            
                               
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
            <!--    <section class="similar-property recently portfolio bshd p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                        <div class="row portfolio-items">
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                          
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                  
                                    <div class="homes-content">
                                      
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                     
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Grs</span>
                                            </li>
                                        </ul>
                                       
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 230,000</a>
                                </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-lg-4 col-md-6 col-xs-12 people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                          
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                   
                                    <div class="homes-content">
                                     
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                      
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Grs</span>
                                            </li>
                                        </ul>
                                   
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 230,000</a>
                                </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                         
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                   
                                    <div class="homes-content">
                                     
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                   
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Grs</span>
                                            </li>
                                        </ul>
                                       
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ 230,000</a>
                                </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->




@endsection

