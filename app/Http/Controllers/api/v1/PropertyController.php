<?php

namespace App\Http\Controllers\api\v1;

use App\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{



    public function allproperty()
    {
   //  return Listing::all();
     return response()->json(Listing::all(),200);

    }


    public function apartment()
    {
     //return Listing::where('property_type','apartment')->get();
     return response()->json(Listing::where('property_type','apartment')->get(),200);
    }


    public function house()
    {
     //return Listing::where('property_type','house')->get();
     return response()->json(Listing::where('property_type','house')->get(),200);
    }


    public function propertysell()
    {
     //return Listing::where('property_type','house')->get();
     return response()->json(Listing::where('status','sell')->get(),200);
    }
  
    public function propertyrent()
    {
     //return Listing::where('property_type','house')->get();
     return response()->json(Listing::where('status','rent')->get(),200);
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
