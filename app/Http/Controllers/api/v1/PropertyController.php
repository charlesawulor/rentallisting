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


 
 
public function search($name)
{
   return Listing::where("state",$name )->orWhere("zip_code",$name )->get();
}



}
