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

                                @foreach($order->cart->items as $item)
                                    <tr>
                                     
                                      
                                    <td>{{ $item['item'] ['product_name'] }}</td> 
                                        <td>{{$item ['address'] }} </td>
                                    
                                    </tr>
                                    @endforeach

                                </tbody>              
                            </table>
                          
        

                        </div>
                    </div>
                </div>
            </div>
        </section>

      
   

@endif













@endsection
