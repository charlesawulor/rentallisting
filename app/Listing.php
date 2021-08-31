<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public $timestamps = false;
    protected $fillable = ['agent_name','agent_number','agent_email','garage','pet','floor','mall','shop','park','school','country','state','city','zip_code','address','property_type','status','size','bathroom','bedroom','livingroom','overview','price','appliance','inspection_cost'];
}
