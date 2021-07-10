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
                                    <p class="mt-4">We Have Over Million Properties Just For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <ul class="nav nav-tabs rld-banner-tab">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Enter Keyword...">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select">
                                                                <option value="1">Property Type</option>
                                                                <option value="2">Family House</option>
                                                                <option value="3">Apartment</option>
                                                                <option value="3">Condo</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0">
                                                                <option value="1">Location</option>
                                                                <option value="2">Los Angeles</option>
                                                                <option value="3">Chicago</option>
                                                                <option value="3">Philadelphia</option>
                                                                <option value="3">San Francisco</option>
                                                                <option value="3">Miami</option>
                                                                <option value="3">Houston</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <a class="btn btn-yellow" href="#">Search Now</a>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Property Status -->
                                                                    <div class="form-group categories">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected ">For Sale</li>
                                                                                <li data-value="2" class="option">For Rent</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Property Status -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-2" type="checkbox" name="check">
                                                                        <label for="check-2">Air Conditioning</label>
                                                                        <input id="check-3" type="checkbox" name="check">
                                                                        <label for="check-3">Swimming Pool</label>
                                                                        <input id="check-4" type="checkbox" name="check">
                                                                        <label for="check-4">Central Heating</label>
                                                                        <input id="check-5" type="checkbox" name="check">
                                                                        <label for="check-5">Laundry Room</label>
                                                                        <input id="check-6" type="checkbox" name="check">
                                                                        <label for="check-6">Gym</label>
                                                                        <input id="check-7" type="checkbox" name="check">
                                                                        <label for="check-7">Alarm</label>
                                                                        <input id="check-8" type="checkbox" name="check">
                                                                        <label for="check-8">Window Covering</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-9" type="checkbox" name="check">
                                                                        <label for="check-9">WiFi</label>
                                                                        <input id="check-10" type="checkbox" name="check">
                                                                        <label for="check-10">TV Cable</label>
                                                                        <input id="check-11" type="checkbox" name="check">
                                                                        <label for="check-11">Dryer</label>
                                                                        <input id="check-12" type="checkbox" name="check">
                                                                        <label for="check-12">Microwave</label>
                                                                        <input id="check-13" type="checkbox" name="check">
                                                                        <label for="check-13">Washer</label>
                                                                        <input id="check-14" type="checkbox" name="check">
                                                                        <label for="check-14">Refrigerator</label>
                                                                        <input id="check-15" type="checkbox" name="check">
                                                                        <label for="check-15">Outdoor Shower</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabs_2">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Enter Keyword...">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select">
                                                                <option value="1">Property Type</option>
                                                                <option value="2">Family House</option>
                                                                <option value="3">Apartment</option>
                                                                <option value="3">Condo</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0">
                                                                <option value="1">Location</option>
                                                                <option value="2">Los Angeles</option>
                                                                <option value="3">Chicago</option>
                                                                <option value="3">Philadelphia</option>
                                                                <option value="3">San Francisco</option>
                                                                <option value="3">Miami</option>
                                                                <option value="3">Houston</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <a class="btn btn-yellow" href="#">Search Now</a>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                    <!-- Form Property Status -->
                                                                    <div class="form-group categories">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected ">For Sale</li>
                                                                                <li data-value="2" class="option">For Rent</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Property Status -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                            <ul class="list">
                                                                                <li data-value="1" class="option selected">1</li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                <li data-value="3" class="option">5</li>
                                                                                <li data-value="3" class="option">6</li>
                                                                                <li data-value="3" class="option">7</li>
                                                                                <li data-value="3" class="option">8</li>
                                                                                <li data-value="3" class="option">9</li>
                                                                                <li data-value="3" class="option">10</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Area Size</label>
                                                                            <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Price Range</label>
                                                                            <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-16" type="checkbox" name="check">
                                                                        <label for="check-16">Air Conditioning</label>
                                                                        <input id="check-17" type="checkbox" name="check">
                                                                        <label for="check-17">Swimming Pool</label>
                                                                        <input id="check-18" type="checkbox" name="check">
                                                                        <label for="check-18">Central Heating</label>
                                                                        <input id="check-19" type="checkbox" name="check">
                                                                        <label for="check-19">Laundry Room</label>
                                                                        <input id="check-20" type="checkbox" name="check">
                                                                        <label for="check-20">Gym</label>
                                                                        <input id="check-21" type="checkbox" name="check">
                                                                        <label for="check-21">Alarm</label>
                                                                        <input id="check-22" type="checkbox" name="check">
                                                                        <label for="check-22">Window Covering</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-23" type="checkbox" name="check">
                                                                        <label for="check-23">WiFi</label>
                                                                        <input id="check-24" type="checkbox" name="check">
                                                                        <label for="check-24">TV Cable</label>
                                                                        <input id="check-25" type="checkbox" name="check">
                                                                        <label for="check-25">Dryer</label>
                                                                        <input id="check-26" type="checkbox" name="check">
                                                                        <label for="check-26">Microwave</label>
                                                                        <input id="check-27" type="checkbox" name="check">
                                                                        <label for="check-27">Washer</label>
                                                                        <input id="check-28" type="checkbox" name="check">
                                                                        <label for="check-28">Refrigerator</label>
                                                                        <input id="check-29" type="checkbox" name="check">
                                                                        <label for="check-29">Outdoor Shower</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>
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
                        <h3>Properties</h3>
                        <h2>For Sale</h2>
                    </div>
                </div>


                @if(count($listings) > 0)	
	                                @foreach($listings as $listing)  
                <div class="row portfolio-items">
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property/{{$listing->id}}" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ {{$listing->price}}</span>
                                        <span>For {{$listing->status}}</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">{{$listing->property_type}} Luxury <i>{{$listing->city}}, {{$listing->state}}</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>{{$listing->size}}</span></li>
                                            <li>Living room <span>{{$listing->livingroom}}</span></li>
                                            <li>Beds <span>{{$listing->bedroom}}</span></li>
                                            <li>Baths <span>{{$listing->bathroom}}</span></li>
                                        </ul>
                                    </div>
                                    <img src="/rentallisting/storage/app/public/{{$listing->image}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif



                 <!--   <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Los Angeles</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 230,000</span>
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">
                        <div class="project-single no-mb" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">
                        <div class="project-single no-mb" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 230,000</span>
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">
                        <div class="project-single no-mb last" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span>For Sale</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="bg-all">
                    <a href="properties-full-grid-1.html" class="btn btn-outline-light">View All</a>
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
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <h3>Properties</h3>
                        <h2>For Rent</h2>
                    </div>
                </div>
                <div class="row portfolio-items">
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 230,000</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>New Yor City</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Los Angeles</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                        <div class="project-single" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 230,000</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">
                        <div class="project-single no-mb" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">
                        <div class="project-single no-mb" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 230,000</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">
                        <div class="project-single no-mb last" data-aos="zoom-in">
                            <div class="listing-item compact">
                                <a href="single-property-1.html" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span class="featured">$ 6,500</span>
                                        <span class="rent">For Rent</span>
                                    </div>
                                    <div class="listing-img-content">
                                        <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                        <ul class="listing-hidden-content blue">
                                            <li>Area <span>720 sq ft</span></li>
                                            <li>Rooms <span>6</span></li>
                                            <li>Beds <span>2</span></li>
                                            <li>Baths <span>3</span></li>
                                        </ul>
                                    </div>
                                    <img src="assets/images/feature-properties/fp-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-all">
                    <a href="properties-full-grid-1.html" class="btn btn-outline-light">View All</a>
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
                                <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="featured portfolio home18 item col-lg-4 col-md-6 landscapes sale">
                        <div class="project-single specials" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <div class="homes-price">$9,000/mo</div>
                                        <img src="assets/images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-0">
                                    <li>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="featured portfolio home18 item col-lg-4 col-md-6 people landscapes rent no-pb">
                        <div class="project-single no-mb" data-aos="fade-left">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <div class="homes-price">$3,000/mo</div>
                                        <img src="assets/images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-0">
                                    <li>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
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