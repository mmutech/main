<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deployment extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'employee_id',
        'location_id',
        'unit_id',
        'comment',
        'status',
        'deployment_date',
    ];
}
