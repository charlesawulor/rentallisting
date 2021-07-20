@extends('layouts.app1')

@section('content')




<section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                 
                    <div class="col-lg-12 col-md-12 col-xs-12 py-0 pl-0 user-dash2">
                       
                        <!-- START SECTION PAYMENT-METHOD -->
                        <section class="payment-method notfound">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="tr-single-box">
                                        <div class="tr-single-body">
                                            <div class="tr-single-header">
                                                <h4><i class="far fa-address-card pr-2"></i>Billing Information</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Full Name</label>
                                                    <input type="text" id="name" name="name" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Address</label>
                                                    <input type="text" id="address" name="address" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Card Holder Name</label>
                                                    <input type="text" id="card-name" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Credit Card Number</label>
                                                    <input type="text" id="card-number" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Expiration Month</label>
                                                    <input type="text"  id="card-expiry-month" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Expiration Year</label>
                                                    <input type="text" id="card-expiry-Year" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Card CVC</label>
                                                    <input type="text" id="card-cvc" class="form-control address mb-0">
                                                </div>                                           
                                            </div> <br>
                                           
<a href="{{route('checkout')}}" class="btn reservation btn-radius theme-btn full-width mrg-top-10" style="color:white;font-size:20px; font-weight:bold;  background-color:blue">Pay ${{$totalPrice}} </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="tr-single-box">
                                        <div class="tr-single-body">
                                            <div class="tr-single-header">
                                                <h4><i class="far fa-credit-card pr-2"></i>Appointment Details</h4>
                                            </div>
                                            <!-- Paypal Option -->
           @foreach($listings as $listing)
           <ul><li>Price<strong class="pull-right">${{$listing['item']['price']}}</strong></li></ul>
              <ul><li>Property Address<strong class="pull-right">{{$listing['item']['address']}}</strong></li></ul>
              <ul><li>Zip Code<strong class="pull-right">{{$listing['item']['zip_code']}}</strong></li></ul>
              <ul><li>City<strong class="pull-right">{{$listing['item']['city']}}</strong></li></ul>                                  
              <ul><li>State<strong class="pull-right">{{$listing['item']['state']}}</strong></li></ul>
              <ul><li>Property Type<strong class="pull-right">{{$listing['item']['property_type']}}</strong></li></ul>
              <ul><li>Status<strong class="pull-right">For {{$listing['item']['status']}}</strong></li></ul>
              <ul><li>Agent Name<strong class="pull-right">{{$listing['item']['agent_name']}}</strong></li></ul>
              <ul><li>Agent Number<strong class="pull-right">{{$listing['item']['agent_number']}}</strong></li></ul>
              <ul><li>Agent Email<strong class="pull-right">{{$listing['item']['agent_email']}}</strong></li></ul>
             
                                    
              @endforeach                                
                                            <!-- Debit card option -->
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                        </section>
                        <!-- END SECTION PAYMENT-METHOD -->
                    </div>
                </div>
            </div>
        </section>

@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"></script>

@endsection