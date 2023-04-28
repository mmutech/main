<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'division_id',
        'department_id',
        'unit_id',
        'location_id',
        'area_office_id',
        'feeder_id',
        'comment',
        'status',
        'deployment_date',
    ];
}
