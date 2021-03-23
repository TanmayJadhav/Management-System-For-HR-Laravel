<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Country;

class LocationController extends Controller
{
    public function get_location()
    {
        $location = Location::all();
        return view("pages.locations.map", compact('location'));
    }


    public function get_location_add_page()
    {
        
        $country = Country::all();

        return view("pages.locations.add",compact('country'));
    }

    public function location_add(Request $request)
    {
        
        switch ($request->input('action')) {

            case "add_country" :

            $country = new Country;
            $country->name = $request->input('add_country');

            if($country->save())
            {
                $country = Country::all();
                $success = 'Country Added';
                return view("pages.locations.add",compact('country','success'));
            }

            else
            {
                $country = Country::all();
                $error = 'Process Failed.Try Again!!';
                return view("pages.locations.add",compact('country','error'));
            }
            

            case "add_location":

                $location = new Location;
                $location->address = $request->input('address');
                $location->pincode = $request->input('pincode');
                $location->city = $request->input('city');
                $location->latitude = $request->input('latitude');
                $location->longitude = $request->input('longitude');
                $location->country_id = $request->input('country_id');

                if($location->save())
                {
                    $country = Country::all();
                    $success = 'Country Added';
                    return view("pages.locations.add",compact('country','success'));
                }
                else
            {
                $country = Country::all();
                $error = 'Process Failed.Try Again!!';
                return view("pages.locations.add",compact('country','error'));
            }

            
        }

    }

}
