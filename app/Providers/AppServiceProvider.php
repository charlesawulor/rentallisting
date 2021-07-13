<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Listing;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('listings', listing::orderBy('id','desc')->take(4)->get());

        View::share('alllistings', listing::orderBy('id','desc')->get());

        View::share('rentlistings', listing::where('status','rent')->get());

        View::share('selllistings', listing::where('status','sell')->get());

        View::share('featuredlistings', listing::orderByRaw("RAND()")->take(1)->get());

        //User::orderByRaw("RAND()")->get();

        //User::all()->random(10);

        View::share('listingsapartment', listing::where('property_type','apartment')->take(3)->get());

        View::share('listingsapartmentrent', listing::where('property_type','apartment')->where('status','rent')->take(3)->get());

        View::share('listingsapartmentsell', listing::where('property_type','apartment')->where('status','sell')->take(3)->get());

        View::share('listingshouserent', listing::where('property_type','house')->where('status','rent')->take(3)->get());

        View::share('listingshousesell', listing::where('property_type','house')->where('status','sell')->take(3)->get());

        



    }
}
