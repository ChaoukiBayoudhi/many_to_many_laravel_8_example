<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    use HasFactory;
    //protected $table = 'travellers';
    protected $primaryKey='passportNumber';
    public $incrementing=false;
    public $keyType='string';
    protected $fillable=['name','email','nationality'];
    public $timestamps=false;
    
    public function trips()
    {
        return $this->belongsToMany(Trip::class,TravellerTrips::class);
    }
}
