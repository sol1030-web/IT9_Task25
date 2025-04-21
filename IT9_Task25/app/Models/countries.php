<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    use HasFactory;

    
    protected $table = 'countries';

    protected $primaryKey = 'country_id';


    public $timestamps = true;

   
    protected $fillable = [
        'country_name',
        'region_id',
    ];

   
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }
}
