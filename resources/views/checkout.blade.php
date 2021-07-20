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
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Card Holder Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Credit Card Number</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Expiration Month</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Expiration Year</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Card CVC</label>
                                                    <input type="text" class="form-control address mb-0">
                                                </div>
                                            <!--    <div class="col-sm-6">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control mb-0">
                                                </div> -->
                                            </div>
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
           <ul><li>Date<strong class="pull-right">{{$listing['item']['price']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['address']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['city']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['zip_code']}}</strong></li></ul>
                                    
              <ul><li>Date<strong class="pull-right">{{$listing['item']['state']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['property_type']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['agent_name']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['agent_number']}}</strong></li></ul>
              <ul><li>Date<strong class="pull-right">{{$listing['item']['agent_email']}}</strong></li></ul>
             
                                    
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