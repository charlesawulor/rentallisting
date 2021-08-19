@extends('layouts.app1')

@section('content')






<section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-lg-12 col-md-12 col-xs-12 pl-0 user-dash2">
                    
                        <div class="my-properties">
                        @foreach($orders as $order)
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        
                                        <th>Agent/Management Name</th>
                                        <th>Agent Phone Number</th>
                                        <th>Property Address</th>
                                       
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($order->cart->items as $item)
                                    <tr>
                                     
                                      
                                    <td>{{$item ['item'] ['agent_name']  }}</td>
                                     <td>{{$item ['item'] ['agent_number']  }}</td>
                                     <td>{{$item ['item'] ['address']  }}, {{$item ['item'] ['zip_code']  }} , {{$item ['item'] ['city']  }}. {{$item ['item'] ['state']  }}</td>
                                 
                                     
                             
                                    
                                    </tr>
                                @endforeach


                             

                                </tbody>              
                            </table>
                            @endforeach
        

                        </div>
                    </div>
                </div>  <br><br><br><br><br><br>



            </div>
        </section>

      
 











@endsection
