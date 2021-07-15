@extends('layouts.app1')

@section('content')


        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list featured portfolio blog">
            <div class="container">
              
               


                <!-- Block heading end -->
                <div class="row featured portfolio-items">

             
                @if(count($listingsapartmentrent) > 0)	
	                                @foreach($listingsapartmentrent as $listing)  
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" >
                        <div class="project-single" data-aos="fade-up" style="height:600px; background-color:white">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="single-property/{{$listing->id}}">View Property</a><span class="category"></span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property/{{$listing->id}}" class="homes-img">
                                        <div class="homes-tag button alt featured">${{$listing->price}}</div>
                                        <div class="homes-tag button alt sale">For {{$listing->status}}</div>
                                        <div class="homes-price">Pet : {{$listing->pet}}</div>
                                        <img src="/rentallisting/storage/app/public/{{$listing->image}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            
                            </div>
                            <!-- homes content -->
                            <div class="homes-content" style="height:200px">
                                <!-- homes address -->
                                <h3><a href="single-property/{{$listing->id}}">Luxury {{$listing->property_type}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property/{{$listing->id}}">
                                        <i class="fa fa-map-marker"></i><span>{{$listing->address}},{{$listing->zip_code}} {{$listing->city}}. <br> {{$listing->country}} .</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>{{$listing->bedroom}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>3 {{$listing->bathroom}}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>{{$listing->size}}</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span>{{$listing->garage}}</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                <a href="single-property-1.html">${{$listing->price}}</a>
                                </h3>
                                  
                                </div>
                                <div class="footer">
                                    <a href="agent-details.html">
                                        <i class="fa fa-user"></i>{{$listing->agent_name}}
                                    </a> 
                                    <span>
                                <i class="fa fa-calendar"></i>{{$listing->created_at}}
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach 



                    @else
 <div style="background-color:white" class="grand-totall">
   <h2 style="text-align:center">
   <img src="assets/images/feature-properties/notavailable.png" alt="">
    </h2>
   <br>
   <br>
    <!--  <a style="width:20%; margin: auto ; color:Blue; font-size:30px" href="{{route('home')}}">HOME</a>-->  
   </div>


 
                @endif



                </div>
                <nav aria-label="..." class="pt-3">
                    <ul class="pagination grid-3">
                      
                       {{$listingsapartmentrent->links()}}

                    </ul>
                </nav> 
            </div>
        </section>






@endsection