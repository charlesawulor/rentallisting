<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Listing;
use Stripe\Charge;
use Stripe\Stripe;
use App\Cart;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = listing::orderBy('id','asc')->get();
       return view('single-property',compact ('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listings = listing::find($id);
        return view('single-property')->with('listings',$listings);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAddToCart(Request $request, $id) {
        $listing = Listing::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($listing, $listing->id);   
        $request->session()->put('cart',$cart);
       // return back(); 
       return redirect()->route('appointment-cart');        
    }

  //   public function getReduceByOne($id) { 
  //       $oldCart = Session::has('cart') ? Session::get('cart') : null;
  //      $cart = new Cart($oldCart);
  //      $cart->reduceByOne($id);
  //      if (count($cart->items) > 0){
  //          Session::put('cart', $cart);
  //           }else {
  //            Session::forget('cart');
  //           }
  //      return back(); 
  //  } 


    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);        
     if (count($cart->items) > 0){
    Session::put('cart', $cart);
     }else {
      Session::forget('cart');
     }
       // return back(); 
        return redirect()->route('appointment-cart');
    }



     public function getCart(){
        if (!Session::has('cart')){
             return view('appointment-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('appointment-cart', ['listings' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }



      public function getCheckout(){
        if (!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['listings' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }


      public function postCheckout(Request $request)
      {
          if (!Session::has('cart')){
             return redirect()->route('shoppingcart');
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         
   Stripe::setApiKey('sk_test_51Io4hXACLwpJgLfCVSFzJMfIoYRSfnzavlSQIMDzzaTnwziz6vtwrCyGutVROodumwZabXSPvFDC9Q6GKyf8Mz3w002rLASPxn');
         try {
           $charge = Charge::create(array(
              "amount" => $cart->totalPrice * 100,
              "currency" => "usd",
              "source" =>'tok_visa', //use this for test cards
           // "source" => $request->input('stripeToken'), // use this for real cards when In production
              "description" => "Charge for fashion store"
              ));
              $order = new Order();
              $order->cart = serialize($cart);
              $order->address = $request->input('address');
              $order->name = $request->input('name');
              $order->payment_id = $charge->id;
              Auth::user()->orders()->save($order);            
             } catch (\Exception $e){
               return redirect()->route('checkout')->with('error',$e->getMessage());
            }
            Session::forget('cart');
            return redirect()->route('ordercomplete')->with('success', 'Payment successful');
          } 
         


          public function all()
          {
              $listings = listing::orderBy('id','asc')->get();
             return view('listing',compact ('alllistings'));
          }

}
