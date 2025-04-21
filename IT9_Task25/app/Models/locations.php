<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;

    
    protected $table = 'locations';

    
    protected $primaryKey = 'location_id';


    public $timestamps = true;

   
    protected $fillable = [
        'street_address',
        'postal_code',
        'city',
        'state_province',
        'country_id',
    ];


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }
}
