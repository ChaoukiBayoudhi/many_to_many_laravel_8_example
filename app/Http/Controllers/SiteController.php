<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveller;
use App\Models\Trip;

class SiteController extends Controller
{
    //to find all trips of a given traveller
    public function getTrips($traveller_passport)
    {
        return Traveller::find($traveller_passport)->trips;
    }

    public function getTravellers($trip_id)
    {
        return Trip::find($trip_id)->travellers;
    }
}
