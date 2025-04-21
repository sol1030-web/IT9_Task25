<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

   
    protected $table = 'jobs'; 


    protected $primaryKey = 'job_id';

  
    public $timestamps = true;

   
    protected $fillable = [
        'job_title',
        'min_salary',
        'max_salary',
    ];

   
    protected $casts = [
        'min_salary' => 'decimal:2',
        'max_salary' => 'decimal:2',
    ];
}
