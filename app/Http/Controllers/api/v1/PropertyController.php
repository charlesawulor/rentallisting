<?php

namespace App\Http\Controllers\api\v1;

use App\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{



    public function allproperty()
    {
     return Listing::all();

    }


    public function apartment()
    {
     return Listing::where('property_type','apartment')->get();

    }


    public function house()
    {
     return Listing::where('property_type','house')->get();

    }



 

    public function search(Request $request)
   {
   $query=Listing::query();
   if ($request->keyword) {
   $query->where('city',  'LIKE', '%' .$request->keyword. '%')->orWhere('zip_code',  'LIKE', '%' .$request->keyword. '%');
   }
   $listing=$query->get();
   return response()->json([
   'message'=>'Search records found',
   'data'=>$listing
   ],200) ;
   }






}
