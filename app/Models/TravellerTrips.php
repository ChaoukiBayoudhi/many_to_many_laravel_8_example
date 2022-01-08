<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravellerTrips extends Model
{
    use HasFactory;
    //protected $table="traveller_trips";
    protected $fillable=["trip_id","traveller_passportNo"];
    public $timestamps=false;
}
