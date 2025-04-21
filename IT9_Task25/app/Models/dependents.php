<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependents extends Model
{
    use HasFactory;

    protected $primaryKey = 'dependent_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'relationship',
        'employee_id',
    ];

    // Relationship: Dependent belongs to an employee
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
