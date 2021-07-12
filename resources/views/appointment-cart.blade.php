@extends('layouts.app1')

@section('content')





@if(Session::has('cart'))

<section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2">
                    
                        <div class="my-properties">
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th class="pl-2">Unpaid Property Inspection Appointment(s)</th>
                                        <th class="p-0"></th>
                                        <th>Agent Information</th>
                                        <th>Number Of Appointment(s)</th>
                                        <th>Inspection Cost</th>
                                        <th>Delete  </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($listings as $listing)
                                    <tr>
                                        <td class="image myelist">
                                            <a href=""><img alt="my-properties-3" src="/rentallisting/storage/app/public/{{$listing['item']['image']}}" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury {{$listing['item']['property_type']}}</h2></a>
                                                <figure><i class="lni-map-marker"></i> {{$listing['item']['address']}},{{$listing['item']['zip_code']}} {{$listing['item']['city']}}. {{$listing['item']['state']}}</figure>
                                              
                                            </div>
                                        </td>
                                        <td>{{$listing['item']['agent_email']}} | {{$listing['item']['agent_email']}} | {{$listing['item']['agent_number']}} </td>
                                        <td>x{{$listing['qty']}}</td>
                                        <td>${{$listing['price']}}</td>
                                        <td >
                                      <a href="{{ route('listing.remove', ['id'=>$listing['item']['id']])}}"><i class="far fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach

                                    <td style = "position:relative; left:80%;" >
                                   <h4 > <b>Grand Total : </b></h4>
                                  </td>
                                    <td style = "position:relative; left:80%;" >
                              <h4 ><b> <span>${{$totalPrice}}</span> </b> </h4>
                             </td>
                                </tbody>
                            </table>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @else
 <div style="background-color:white" class="grand-totall">
   <h2 style="text-align:center"> No Unpaid Appointment</h2>
   <br>
   <br>
    <!--  <a style="width:20%; margin: auto ; color:Blue; font-size:30px" href="{{route('home')}}">HOME</a>-->  
   </div>
   

@endif













@endsection
