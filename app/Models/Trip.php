<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    //protected $table = 'trips';
    protected $fillable=['name',
                         'from',
                         'to',
                         'date',
                         'time',
                         'max_place'
                        ];

    public function travellers()
    {
        //return $this->belongsToMany(Traveller::class,'traveller_trips');
        //or using the model association class name
        return $this->belongsToMany(Traveller::class,TravellerTrips::class);
    }
}
