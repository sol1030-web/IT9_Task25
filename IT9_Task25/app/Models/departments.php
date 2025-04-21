<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;

    
    protected $table = 'departments';

 
    protected $primaryKey = 'department_id';


    public $timestamps = true;

   
    protected $fillable = [
        'department_name',
        'location_id',
    ];

   
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }
}
